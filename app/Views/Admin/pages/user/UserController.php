<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\UserService;


class UserController extends BaseController
{
   
          private $service;
          //Tạo một hàm construct
          public function __construct(){
            $this -> service = new UserService(); // định nghĩa thằng service
          }
    public function list()
    {
        $data = [];
       
        $cssFiles = [
            'Admin/vendor/datatables/dataTables.bootstrap4.min.css'
        ];
        $jsFiles = [
            'Admin/vendor/datatables/jquery.dataTables.min.js',
            'Admin/vendor/datatables/dataTables.bootstrap4.min.js',
            'Admin/js/demo/datatables-demo.js',
        ];
        $dataLayout['users'] = $this -> service -> getAllUser();
        $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/user/list',$dataLayout, $cssFiles ,$jsFiles);
        return view('admin/main', $data);
    }

    public function add(){
        $data = [];
        $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/user/add');
        return view('admin/main', $data);
    }
}
?>