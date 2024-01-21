<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;

class ProductController extends BaseController
{
    public $category;
    public $group;
    public $product;
    public function __construct()
    {
        $this->category = new CategoryService();
        $this->group = new GroupService();
        $this->product = new ProductService();
    }
    public function index($meta)
    {
        $data = [];
        $jsFiles = [
            'assets/js/custom.js'
        ];
        $id_cate = $this->category->getIDcategoryByMeta($meta);
        $dataCategory = array_merge($this->getHeaderData(), $this->getSidebarData());
        $dataCategory['sorting'] = $this->category->getCategoryLeve3($id_cate);
        $dataCategory['category'] = $this->category->getCategoryByMeta($meta);
        $dataCategory['product_category'] = $this->product->getDataPaginateProduct($id_cate);
        $dataCategory['pager'] = $this->product->getPargerProduct();
        $data = $this->loadLayout($data, 'Category', 'Home/pages/category', $dataCategory, [], $jsFiles);
        return view('Home/index', $data);

    }

    public function sort($meta, $sort)
    {
        $data = [];
        $jsFiles = [
            'assets/js/custom.js'
        ];



        $dataCategory = array_merge($this->getHeaderData(), $this->getSidebarData());
        $id_cate = $this->category->getIDcategoryByMeta($meta);
       
        $a = $this->category->getIDcategoryByMeta($sort);
        $dataCategory['product_category'] = $this->product->getAllProductByCategory($id_cate);
        $dataCategory['product_category'] = $this->product->getAllProductByType($a);
        $dataCategory['pager'] = $this->product->getPargerProduct();
        $dataCategory['sorting'] = $this->category->getCategoryLeve3($id_cate);
        $dataCategory['category'] = $this->category->getCategoryByMeta($meta);

        $data = $this->loadLayout($data, 'Category', 'Home/pages/category', $dataCategory, [], $jsFiles);
        return view('Home/index', $data);
    }



}
