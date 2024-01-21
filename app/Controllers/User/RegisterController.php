<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\LoginService;
use App\Common\Result;

class RegisterController extends BaseController
{
    public $service;

    public function __construct()
    {
        $this->service = new LoginService();
    }
    
    public function index()
    {
        return view('Home/pages/register');
    }
    
    public function create()
    {
      $result = $this->service->create($this->request);
      return redirect()->back()->withInput()->with($result['messageCode'], $result['messages']);
    }
    

    
    
}
