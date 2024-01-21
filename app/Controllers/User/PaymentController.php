<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\OderDetailService;
use App\Services\OderService;
use App\Services\ProductService;
use App\Services\CategoryService;


class PaymentController extends BaseController
{
    public $category;
    public $group;
    public $product;
    public $oder;
    public $oder_detail;
    public function __construct()
    {
        $this->category = new CategoryService();
        $this->group = new GroupService();
        $this->product = new ProductService();
        $this->oder = new OderService();
        $this->oder_detail = new OderDetailService();
    }
    public function index()
    {
        $data = [];
        $postData = $this->request->getPost();
        $oderID = $this->oder->saveOrder($postData);
        $this->oder_detail->saveOrderDetails($oderID, $postData['product_ids'], $postData['product_quantities'], $postData['product_prices']);
        $data['oder_details'] = $this->oder_detail->getOderDetailByID($oderID);
        $data['oder'] = $this->oder->getOderByID($oderID);

        return view('Home/pages/oder_detail', $data);
    }
  




}
