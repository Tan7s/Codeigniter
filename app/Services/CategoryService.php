<?php

namespace App\Services;

use App\Models\CategoryModel;
use App\Models\GroupModel;
use Exception;
use App\Common\Result;

class CategoryService extends BaseService
{
    private $category;
    function __construct()
    {
        parent::__construct();
        $this->category = new CategoryModel();
        $this->category->protect(false);
    }
    public function getAllGroup()
    {
        return $this->category->findAll();
    }

    public function getCategoryByType($type)
    {
        if ($type == 1) {
            return $this->category->where('type', $type)->findAll(5, 1);
        }
        return $this->category->where('type', $type)->findAll();
    }

    public function getAllMenuByLoaiAndOffset($type)
    {
        if ($type == 1) {
            return $this->category->where('type', $type)->findAll(5, 1);
        }
        return $this->category->where('type', $type)->findAll();
    }

    public function getAllCategoryByPartner($id)
    {
        return $this->category->where('partnert', $id)->findAll();
    }
    public function getNameByID($id)
    {
        return $this->category->where('id', $id)->first();
    }
    public function getIDcategoryByMeta($meta)
    {
        return $this->category->where('meta', $meta)->get()->getRow('id');

    }
    public function getCategoryByMeta($meta)
    {
        return $this->category->where('meta', $meta)->first();
    }

    public function getCategoryLeve3($partnert)
    {
        $opject = $this->category->where('partnert', $partnert)->get()->getRow('id');
        return $this->category->where('partnert', $opject)->findAll();
    }

    public function getCategotyByID($id)
    {
        return $this->category->where('id', $id)->first();
    }

    public function updateCategory($dataUpdate)
    {
        $Save = $dataUpdate->getPost();
        try {
            $this->category->save($Save);
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
    public function deteCategoryByID($requestData)
    {
        try {
            $this->category->delete($requestData);
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
    public function addCategory($requestData){
    
        $Save = $requestData->getPost();
        try {
            $this->category->save($Save);
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
