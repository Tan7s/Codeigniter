<?php

namespace App\Services;

use App\Common\Result;
use Exception;
use App\Models\UserModel;

class LoginService extends BaseService
{

    private $users;
    //Construct
    function __construct()
    {
        parent::__construct(); // dùng construct của thằng cha
        $this->users = new UserModel();
        $this->users->protect(false); // không phải đinh nghĩa trong model UerModel
    }
    public function hasLoginInfo($requestData)
    {
        $validate = $this->validateLogin($requestData);
        if ($validate->getErrors()) {
            return [
                'status' => Result::STATUS_CODE_ERR,
                'messageCode' => Result::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        }
        $param = $requestData->getPost();
        
        $user = $this->users->where('email', $param['email'])->first();
        if (!$user) {
            return [
                'status' => Result::STATUS_CODE_ERR,
                'messageCode' => Result::MESSAGE_CODE_ERR,
                'messages' => [
                    'thongbaoemail' => 'Email Khong Tồn tại'
                ]
            ];
        }
        ;
        if (!password_verify($param['password'], $user['password'])) {
            return [
                'status' => Result::STATUS_CODE_ERR,
                'messageCode' => Result::MESSAGE_CODE_ERR,
                'messages' => [
                    'thongbaomk' => 'Password khong dung'
                ]
            ];
        }
        ;
        $sesstion = session();
        unset($user['password']);
        $sesstion->set('user_login', $user);
        if ($user['loai'] == 1) {
            return [
                'status' => Result::STATUS_CODE_OK,
                'messageCode' => Result::MESSAGE_CODE_OK,
                'messages' => null,
                'redirect' => 'admin/home'
            ];
        } else {
            return [
                'status' => Result::STATUS_CODE_OK,
                'messageCode' => Result::MESSAGE_CODE_OK,
                'messages' => null,
            ];
        }
    }
    public function validateLogin($requestData)
    {
        $rule = [
            'email' => 'valid_email',
            'password' => 'max_length[20]|min_length[5]',
        ];
        $messages = [
            'email' => [
                'valid_email' => 'Tài khoản {field} {value} Không đúng',
                'is_unique' => 'Email đã tồn tại'
            ],
            'password' => [
                'max_length' => 'Độ dài tối đa là {param}',
                'min_length' => 'Độ dài tối thiểu là {param}',
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }

    public function logout()
    {
        $sesstion = session();
        $sesstion->destroy();
    }
    public function create($requestData)
    {
        $validate = $this->validateAddUser($requestData);
        if ($validate->getErrors()) {
            return [
                'status' => Result::STATUS_CODE_ERR,
                'messageCode' => Result::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        } else {
            $Save = $requestData->getPost();
            unset($Save['confirm_password']);
            $Save['password'] = password_hash($Save['password'], PASSWORD_BCRYPT);
            $Save['loai'] = 2;
            try {
                $this->users->save($Save);
                return [
                    'status' => Result::STATUS_CODE_OK,
                    'messageCode' => Result::MESSAGE_CODE_OK,
                    'messages' => ['Đăng Ký thành công']
                ];
            } catch (Exception $e) {
                return [
                    'status' => Result::STATUS_CODE_ERR,
                    'messageCode' => Result::MESSAGE_CODE_ERR,
                    'messages' => ['succses' => $e->getMessage()]
                ];
            }
        }
    }

    private function validateAddUser($requestData)
    {
        $rule = [
            'username' => 'max_length[100]',
            'email' => 'valid_email|is_unique[users.email]',
            'password' => 'max_length[20]|min_length[5]',
            'confirm_password' => 'matches[password]',
        ];
        $messages = [
            'email' => [
                'valid_email' => 'Tài khoản {field} {value} Không đúng',
                'is_unique' => 'Email đã tồn tại'
            ],
            'username' => [
                'max_length' => 'Độ dài tối thiểu là {param}',
            ],
            'password' => [
                'max_length' => 'Độ dài tối đa là {param}',
                'min_length' => 'Độ dài tối thiểu là {param}',
            ],
            'confirm_password' => [
                'matches' => 'Mật khẩu nhập lại không đúng',
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }

}
