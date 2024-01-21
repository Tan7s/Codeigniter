<?php

namespace App\Services;

use App\Models\GroupModel;
use Exception;
use App\Common\Result;

class GroupService extends BaseService
{
    private $group;
    function __construct()
    {
        parent::__construct();
        $this->group = new GroupModel();
        $this->group->protect(false);
    }

    public function getNameByID($id)
    {
        return $this->group->where('id', $id)->first();
    }
    public function getAllGroup()
    {
        return $this->group->findAll();
    }
    public function getGroupByID($id)
    {
        return $this->group->where('id', $id)->first();
    }

    public function updateGroup($dataUpdate)
    {
        $Save = $dataUpdate->getPost();
        try {
            $this->group->save($Save);
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
    public function deteGroupByID($requestData)
    {
        try {
            $this->group->delete($requestData);
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
    public function addGroup($requestData)
    {

        $Save = $requestData->getPost();
        try {
            $this->group->save($Save);
            return [
                'status' => Result::STATUS_CODE_OK,
                'messageCode' => Result::MESSAGE_CODE_OK,
                'messages' => ['Thêm thành công']
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
