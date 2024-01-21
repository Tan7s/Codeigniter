<?php
namespace App\Services;

use App\Models\UserModel;
use App\Common\Result;
use Exception;

class UserService extends BaseService
{
    private $users;
    //Construct
    function __construct()
    {
        parent::__construct(); // dùng construct của thằng cha
        $this->users = new UserModel();
        $this->users->protect(false); // không phải đinh nghĩa trong model UerModel
    }
    // lấy tất cả dữ liệu của user
    public function getAllUser()
    {
        // dd($this->users->findAll());
        return $this->users->findAll();
    }
    // Thêm mới user
    public function addUser($requestData)
    {
        $validate = $this->validateAddUser($requestData);
        // dd( $validate = $this->validateAddUser($requestData));
        //dd($validate->getErrors());
        // dd($requestData);
        if ($validate->getErrors()) {
            return [
                'status' => Result::STATUS_CODE_ERR,
                'messageCode' => Result::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];

        }
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
    public function updateUser($dataUpdate)
    {
        $dataSave = $dataUpdate->getPost();
        $falg = empty($dataSave['change_password']);
            if ($falg) {
                unset($dataSave['password']);
                unset($dataSave['confirm_password']);

            } else {
                unset($dataSave['confirm_password']);
                unset($dataSave['change_password']);
                $dataSave["password"] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
            }
            $validate = $this->validateEditUser($dataUpdate);
            if ($validate->getErrors()) {
                return [
                    'status' => Result::STATUS_CODE_ERR,
                    'messageCode' => Result::MESSAGE_CODE_ERR,
                    'messages' => $validate->getErrors()
                ];
            }
        $Save = $dataUpdate->getPost();
        unset($Save['confirm_password']);
        unset($Save['change_password']);
        $Save['password'] = password_hash($Save['password'], PASSWORD_BCRYPT);
            try {
                $this->users->save($Save);
                return [
                    'status' => Result::STATUS_CODE_OK,
                    'messageCode' => Result::MESSAGE_CODE_OK,
                    'messages' => ['Cập nhập thành công']
                ];
            } catch (Exception $e) {
                return [
                    'status' => Result::STATUS_CODE_ERR,
                    'messageCode' => Result::MESSAGE_CODE_ERR,
                    'messages' => ['succses' => $e->getMessage()]
                ];

            }

    }
    public function getUsersByID($idUser)
    {
        return $this->users->where('id', $idUser)->first();
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

    private function validateEditUser($requestData)
    {
        $rule = [
            'username' => 'max_length[100]',
            'email' => 'valid_email|is_unique[users.email, id,' . $requestData->getPost()['id'] . ']',
        ];
        $messages = [
            'email' => [
                'valid_email' => 'Tài khoản {field} {value} Không đúng',
                'is_unique' => 'Email đã tồn tại'
            ],
            'username' => [
                'max_length' => 'Độ dài tối thiểu là {param}',
            ],
        ];
        $dataSave = $requestData->getPost();
        if (!empty($dataSave['change_password'])) {

            $rule['password'] = 'required|max_length[20]|min_length[5]';
            $rule['confirm_password'] = 'required|matches[password]';
            $messages['password'] = [
                'required' => 'Mật khẩu không được để trống',
                'max_length' => 'Độ dài tối đa là {param}',
                'min_length' => 'Độ dài tối thiểu là {param}',
            ];
            $messages['confirm_password'] = [
                'required' => 'Mật khẩu không được để trống',
                'matches' => 'Mật khẩu nhập lại không đúng',
            ];

        }
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }
    public function delleteUsers($requestData)
    {
        try {
            $this->users->delete($requestData);
            return [
                'status' => Result::STATUS_CODE_OK,
                'messageCode' => Result::MESSAGE_CODE_OK,
                'messages' => ['Xóa thành công']
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

?>