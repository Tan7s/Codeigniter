<?php
namespace App\Controllers\Admin;

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
        $dataLayout['product'] = $this->product->getAllProduct();
        $data = $this->loadLayoutAdmin($data, 'Danh Sách Tài Khoản', 'admin/pages/product/list', $dataLayout, $cssFiles, $jsFiles);
        return view('admin/main', $data);
    }
    public function add()
    {
        $data = [];
        $data = $this->loadLayoutAdmin($data, 'Thêm group', 'admin/pages/product/add');
        return view('admin/main', $data);
    }
    public function create()
    {
        $result = $this->product->addProduct($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }

    public function edit($id)
    {
        $product = $this->product->getProductByID($id);
        if (!$product) {
            return redirect('error/404');
        }
        $data = [];
        $jsFile = [
            base_url() . 'Admin/js/demo/event.js'
        ];
        $dataLayout['product'] = $product;
        $data = $this->loadLayoutAdmin($data, 'Chỉnh Sửa Group', 'admin/pages/product/edit', $dataLayout, [], $jsFile);
        return view('admin/main', $data);
    }
    public function update()
    {
        $result = $this->product->updateProduct($this->request);
        return redirect()->to(previous_url())->withInput()->with($result['messageCode'], $result['messages']);
    }

    public function delete($id)
    {
        $result = $this->product->getProductByID($id);
        if ($result != null) {
            $dl = $this->product->deteProductByID($result);
            return redirect('admin/product/list')->with($dl['messageCode'], $dl['messages']);
        } else {
            return redirect("errors/html/error_404");
        }
    }
}
?>