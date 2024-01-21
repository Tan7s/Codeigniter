<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
   
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        // $this->dataCategory = $this->getHeaderData();

    }
    public function loadLayout($data, $title, $content, $dataLayout = [], $cssFiles = [], $jsFiles = [])
    {
        $data['title'] = $title;
        $data['header'] = view('Home/layout/header/header', $dataLayout);
        $data['sidebar'] = view('Home/layout/sidebars/sidebar', $dataLayout);
        $data['footer'] = view('Home/layout/footer');
        $data['content'] = view($content, $dataLayout);
        $data['cssFies'] = $cssFiles;
        $data['jsFiles'] = $jsFiles;
        return $data;

    }

    public function loadLayoutAdmin($data, $title, $content, $dataLayout = [], $cssFiles = [], $jsFiles = [])
    {
        $data['title'] = $title;
        $data['siderba'] = view('admin/layout/sidebar');
        $data['header'] = view('admin/layout/header');
        $data['content'] = view($content, $dataLayout);
        $data['jsFiles'] = $jsFiles;
        $data['cssFiles'] = $cssFiles;
        return $data;
    }

    public $category;
    public $group;
    public $product;
    protected $dataCategory = [];
    public function getHeaderData()
    {
        $this -> category =  new CategoryService();
        $dataCategory['category_header_1'] = $this->category->getCategoryByType(1);
        $dataCategory['category_header_2'] = $this->category->getCategoryByType(2);
        return $dataCategory;
    }
    public function getSidebarData(){
        $this -> category =  new CategoryService();
        $this -> group = new GroupService();
        $this -> product = new ProductService();
        $dataCategory['category_sidebar'] = $this -> category -> getAllMenuByLoaiAndOffset(1);
        $dataCategory['category_sidebar'] = $this -> category -> getAllMenuByLoaiAndOffset(1);
        $dataCategory['group_spnoibat'] = $this -> group ->getNameByID(2);
        $dataCategory['group_spbanchay'] = $this -> group ->getNameByID(3);
        $dataCategory['product_view'] = $this->product->getAllProductByView(5);
        $dataCategory['product_order'] = $this->product->getAllProductByOrder(5);
        return $dataCategory;
    }
  

    
}
