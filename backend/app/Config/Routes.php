<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');

// ----------------- Auth -----------------
$routes->post('signup', 'Auth::signup');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->get('logout', 'Auth::logout');

// ----------------- Admin Dashboard -----------------
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {

    // Dashboard
    $routes->get('dashboard', 'AdminController::index');

    // Accounts CRUD
    $routes->get('accounts', 'AdminController::accounts');
    $routes->get('accounts/create', 'AdminController::createUser');
    $routes->post('accounts/store', 'AdminController::storeUser');
    $routes->get('accounts/edit/(:num)', 'AdminController::editUser/$1');
    $routes->post('accounts/update/(:num)', 'AdminController::updateUser/$1');
    $routes->get('accounts/delete/(:num)', 'AdminController::deleteUser/$1');
    $routes->post('accounts/delete/(:num)', 'AdminController::deleteUser/$1');
});
