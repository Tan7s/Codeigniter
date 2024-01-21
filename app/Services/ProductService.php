<?php

namespace App\Services;

use App\Models\ProductModel;
use Exception;
use App\Common\Result;

class ProductService extends BaseService
{
    private $product;
    function __construct()
    {
        parent::__construct();
        $this->product = new ProductModel();
        $this->product->protect(false);
    }
    public function getProductByID($id)
    {
        return $this->product->where("id", $id)->first();
    }
    public function getAllProductByGroup($id)
    {
        return $this->product->where('group_id', $id)->findAll();
    }

    public function getAllProductByView($limit)
    {
        return $this->product->orderBy('view', 'DESC')->findAll($limit);

    }
    public function getAllProductByOrder($limit)
    {
        return $this->product->orderBy('oder', 'DESC')->findAll($limit);

    }

    public function getAllProductByCategory($id)
    {
        return $this->product->where('category_id', $id)->findAll();
    }
    public function getAllProductByType($id)
    {
       
        return $this->product->where('type', $id)->findAll();
    }

    public function getDataPaginateProduct($id)
    {

        return $this->product->where('category_id', $id)->orderBy('id', 'DESC')->paginate(6);
    }

    public function getPargerProduct()
    {
        return $this->product->pager;
    }
    public function getByID($id)
    {
        return $this->product->find($id);
    }

    public function getAllProduct()
    {
        return $this->product->findAll();
    }



    public function updateProduct($dataUpdate)
    {
        $Save = $dataUpdate->getPost();

        try {

            $file = $dataUpdate->getFile('image');

            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $success = $file->move('assets/images/products/', $newName);
                if ($success) {
                    $Save['image'] = $newName;
                } else {
                    dd('Không thể di chuyển file');
                }
            }

            $this->product->save($Save);
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
    public function deteProductByID($requestData)
    {

        try {
            $this->product->delete($requestData['id']);
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
    public function addProduct($requestData)
    {

        $Save = $requestData->getPost();

        try {

            $file = $requestData->getFile('image');

            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $success = $file->move('assets/images/products/', $newName);
                if ($success) {
                    $Save['image'] = $newName;
                } else {
                    dd('Không thể di chuyển file');
                }
            }

            $this->product->save($Save);
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
