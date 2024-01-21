<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;


class CategoryController extends BaseController
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
        $dataLayout['categorys'] = $this->category->getAllGroup();
        $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/category/list', $dataLayout, $cssFiles, $jsFiles);
        return view('admin/main', $data);
    }
    public function add()
    {
        $data = [];
        $data = $this->loadLayoutAdmin($data, 'Thêm Category', 'admin/pages/category/add');
        return view('admin/main', $data);
    }
    public function create()
    {
        $result = $this->category->addCategory($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }

    public function edit($id)
    {
        $categorys = $this->category->getCategotyByID($id);
        if (!$categorys) {
            return redirect('error/404');
        }
        $data = [];
        $jsFile = [
            base_url() . 'Admin/js/demo/event.js'
        ];
        $dataLayout['category'] = $categorys;
        $data = $this->loadLayoutAdmin($data, 'Chỉnh Sửa Tài Khoản', 'admin/pages/category/edit', $dataLayout, [], $jsFile);
        return view('admin/main', $data);
    }
    public function update()
    {
        $result = $this->category->updateCategory($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }
    public function delete($id)
    {
        $result = $this->category->getCategotyByID($id);
        if ($result != null) {
            $dl = $this->category->deteCategoryByID($result);
            return redirect('admin/category/list')->with($dl['messageCode'], $dl['messages']);
        } else {
            return redirect("errors/html/error_404");
        }
    }
}
?>