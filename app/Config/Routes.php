<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'User\HomeController::index');

$routes->get('cart', 'User\CartController::cart');
$routes->post('addcart', 'User\CartController::addcart');
$routes->get('remove/(:num)', 'User\CartController::remove/$1');
$routes->get('removeall', 'User\CartController::removeall');
$routes->get('bill', 'User\PaymentController::bill');

$routes->get('login', 'User\LoginController::index');
$routes->post('login', 'User\Logincontroller::login');
$routes->get('signup', 'User\RegisterController::index');
$routes->post('signup', 'User\RegisterController::create');
$routes->post('logout', 'User\LoginController::logout');
$routes->post('user/search/search', 'User\HeaderController::search');

$routes->post('payment', 'User\PaymentController::index');
$routes->post('ajax-action', 'User\CartController::ajaxAction');

$routes->group('admin',['filter' => "AutoFilters"] ,function ($routes) {
    $routes->get('home', 'admin\HomeController::index');
    $routes->group('user', function ($routes) {
        $routes->get('list', 'admin\UserController::list');
        $routes->get('add', 'admin\UserController::add');
        $routes->post('create', 'admin\UserController::create');
        $routes->get('edit/(:num)', 'admin\UserController::edit/$1');
        $routes->post('update', 'admin\UserController::update');
        $routes->get('delete/(:num)', 'admin\UserController::delete/$1');
    });
    $routes->group('category', function ($routes) {
        $routes->get('list', 'admin\CategoryController::list');
        $routes->get('add', 'admin\CategoryController::add');
        $routes->post('create', 'admin\CategoryController::create');
        $routes->get('edit/(:num)', 'admin\CategoryController::edit/$1');
        $routes->post('update', 'admin\CategoryController::update');
        $routes->get('delete/(:num)', 'admin\CategoryController::delete/$1');
    });
    $routes->group('group', function ($routes) {
        $routes->get('list', 'admin\GroupController::list');
        $routes->get('add', 'admin\GroupController::add');
        $routes->post('create', 'admin\GroupController::create');
        $routes->get('edit/(:num)', 'admin\GroupController::edit/$1');
        $routes->post('update', 'admin\GroupController::update');
        $routes->get('delete/(:num)', 'admin\GroupController::delete/$1');
    });
    $routes->group('product', function ($routes) {
        $routes->get('list', 'admin\ProductController::list');
        $routes->get('add', 'admin\ProductController::add');
        $routes->post('create', 'admin\ProductController::create');
        $routes->get('edit/(:num)', 'admin\ProductController::edit/$1');
        $routes->post('update', 'admin\ProductController::update');
        $routes->get('delete/(:num)', 'admin\ProductController::delete/$1');
    });

});

$routes->get('(:segment)', 'User\ProductController::index/$1');
$routes->get('detail/(:num)', 'User\DetailController::index/$1');
$routes->get('(:segment)/(:segment)', 'User\ProductController::sort/$1/$2');
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
