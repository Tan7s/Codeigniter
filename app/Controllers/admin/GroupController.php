<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;


class GroupController extends BaseController
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
        $dataLayout['group'] = $this->group->getAllGroup();
        $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/group/list', $dataLayout, $cssFiles, $jsFiles);
        return view('admin/main', $data);
    }
    public function add()
    {
        $data = [];
        $data = $this->loadLayoutAdmin($data, 'Thêm group', 'admin/pages/group/add');
        return view('admin/main', $data);
    }
    public function create()
    {
        $result = $this->group->addGroup($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }

    public function edit($id)
    {
        $group = $this->group->getGroupByID($id);
        if (!$group) {
            return redirect('error/404');
        }
        $data = [];
        $jsFile = [
            base_url() . 'Admin/js/demo/event.js'
        ];
        $dataLayout['group'] = $group;
        $data = $this->loadLayoutAdmin($data, 'Chỉnh Sửa Group', 'admin/pages/group/edit', $dataLayout, [], $jsFile);
        return view('admin/main', $data);
    }
    public function update()
    {
        $result = $this->group->updateGroup($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }
    public function delete($id)
    {
        $result = $this->group->getGroupByID($id);
        if ($result != null) {
            $dl = $this->group->deteGroupByID($result);
            return redirect('admin/group/list')->with($dl['messageCode'], $dl['messages']);
        } else {
            return redirect("errors/html/error_404");
        }
    }
}
?>