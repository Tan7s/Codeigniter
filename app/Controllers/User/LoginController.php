<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\LoginService;
use App\Common\Result;

class LoginController extends BaseController
{
    public $service;

    public function __construct()
    {
        $this->service = new LoginService();

    }
    public function index()
    {
        if (session()->has('user_login')) {
            return redirect("/");
        }
        return view("home/pages/login");


    }

    public function login()
    {
        $a = $this->request;
        $result = $this->service->hasLoginInfo($a);

        if ($result['status'] === Result::STATUS_CODE_OK) {
            if (isset($result['redirect'])) {

                return redirect()->to($result['redirect']);
            } else {

                return redirect('/');
            }
        } elseif ($result['status'] === Result::STATUS_CODE_ERR) {

            return redirect('login')->with($result['messageCode'], $result['messages']);
        }
        ;
    }
    public function logout()
    {
        $this->service->logout();
        return redirect('/');
    }
}
