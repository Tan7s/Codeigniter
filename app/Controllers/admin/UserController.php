<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\UserService;

use App\Common\Result;


class UserController extends BaseController
{

  private $service;
  //Tạo một hàm construct
  public function __construct()
  {
    $this->service = new UserService(); // định nghĩa thằng service
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
      'Admin/js/demo/event.js',
    ];
    $dataLayout['users'] = $this->service->getAllUser();
    $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/user/list', $dataLayout,$cssFiles, $jsFiles);// $dataLayout,
    return view('admin/main', $data);
  }

  public function add()
  {
    $data = [];
    $data = $this->loadLayoutAdmin($data, 'Thêm Tài Khoản', 'admin/pages/user/add');
    return view('admin/main', $data);
  }

  public function create()
  {
    $result = $this->service->addUser($this->request);

    return redirect()->back()->withInput()->with($result['messageCode'], $result['messages']);
  }
  public function edit($id)
  {
    $user = $this->service->getUsersByID($id);
    if (!$user) {
      return redirect('error/404');
    }
    $data = [];
    $jsFile = [
      base_url() . 'Admin/js/demo/event.js'
    ];
    $dataLayout['user'] = $user;
    $data = $this->loadLayoutAdmin($data, 'Chỉnh Sửa Tài Khoản', 'admin/pages/user/edit', $dataLayout, [], $jsFile);
    return view('admin/main', $data);
  }
  public function update()
  {

    $result = $this->service->updateUser($this->request);
    return redirect()->back()->withInput()->with($result['messageCode'], $result['messages']);
  }
  public function delete($id)
  {
    $result = $this->service->getUsersByID($id);
    if ($result != null) {
      $dl = $this->service->delleteUsers($result);
      return redirect('admin/user/list')->with($dl['messageCode'], $dl['messages']);
    } else {
      return redirect("errors/html/error_404");
    }
  }
}
?>