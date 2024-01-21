<?php

namespace App\Services;

use App\Models\ProductModel;

class SearchService extends BaseService
{
    private $productModel;

    public function __construct()
    {
        parent::__construct();
        $this->productModel = new ProductModel();
    }

    public function search($keyword)
    {
        $this->productModel->like('name', $keyword);
        return $this->productModel->findAll();
    }
}
