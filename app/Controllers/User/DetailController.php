<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;
class DetailController extends BaseController
{
    public $category;
    public $group;
    public $product;
    public function __construct()
    {
        $this -> category =  new CategoryService();
        $this -> group = new GroupService();
        $this -> product = new ProductService();
    }
    public function index($id)
    {
        $data = [];
        $jsFiles = [
            'assets/js/custom.js'
        ];
        $dataCategory = array_merge($this->getHeaderData(), $this->getSidebarData());
 
        $dataCategory['details'] = $this->product->getProductByID($id);

        $data = $this -> loadLayout($data,'Chi Tiết', 'Home/pages/detail', $dataCategory,[],$jsFiles);
        return view('Home/index', $data);
    }
}
