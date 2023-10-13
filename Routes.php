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
$routes->get('error/404', function() {
    return view('errors/html/error_404');
});


$routes -> group('admin',function($routes){
    $routes -> get ('home' , 'admin\HomeController::index');
    $routes -> group('user', function($routes){
        $routes -> get('list' , 'admin\UserController::list');
        $routes -> get('add' , 'admin\UserController::add');
        $routes -> post('create' , 'admin\UserController::create');
        $routes -> get('edit/(:num)' , 'admin\UserController::edit/$1');
        $routes -> post('update', 'admin\UserController::update');
        $routes -> get('delete/(:num)', 'admin\UserController::delete/$1');
    });


});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
