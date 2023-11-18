<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AdminController::loginHandler');
$routes->post('/login/succeed', 'AdminController::loginAdmin');
$routes->get('/register', 'AdminController::registerHandler', );
$routes->post('/register/save', 'AdminController::saveRegisterHandler');
$routes->get('/', 'AdminController::index');
