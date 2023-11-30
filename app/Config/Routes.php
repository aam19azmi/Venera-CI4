<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Your existing routes...

$routes->get('/login', 'AdminController::loginHandler');
$routes->post('/login/succeed', 'AdminController::loginAdmin');
$routes->get('/register', 'AdminController::registerHandler');
$routes->post('/register/save', 'AdminController::saveRegisterHandler');
$routes->get('/adminhome', 'AdminController::index');
$routes->get('/admin/admin', 'AdminController::dasboard');
$routes->get('/admin/produk', 'ProductController::index'); // Display all products
$routes->get('/admin/produk/create', 'ProductController::create'); // Display form for creating a product
$routes->post('/admin/produk/store', 'ProductController::store'); // Store a new product
$routes->get('/admin/produk/edit/(:num)', 'ProductController::edit/$1'); // Display form for editing a product
$routes->post('/admin/produk/update/(:num)', 'ProductController::update/$1'); // Update a product
$routes->delete('/admin/produk/delete/(:num)', 'ProductController::delete/$1');// Delete a product
$routes->get('/', function (){
    return view('home.php');
});

// AdminBaseController routes
$routes->get('/adminbase', 'AdminBaseController::index');
$routes->get('/adminbase/create', 'AdminBaseController::create');
$routes->post('/adminbase/store', 'AdminBaseController::store');
$routes->get('/adminbase/edit/(:num)', 'AdminBaseController::edit/$1');
$routes->post('/adminbase/update/(:num)', 'AdminBaseController::update/$1');
$routes->get('/adminbase/delete/(:num)', 'AdminBaseController::delete/$1');