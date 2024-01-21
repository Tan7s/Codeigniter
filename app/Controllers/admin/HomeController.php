<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;

class HomeController extends BaseController
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
  public function index()
  {
    $data = [];
    $jsFiles = [
      'Admin/css/logout.csss'
    ];
    $jsFiles = [

      'Admin/js/demo/event.js',
    ];
    
    $data = $this->loadLayoutAdmin($data, 'Trang chủ', 'Admin/pages/home', $jsFiles, $jsFiles);
    return view('admin/main', $data);
  }
}
?>