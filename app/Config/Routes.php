<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/create', 'Home::create');
$routes->post('/', 'register::insert_register');
$routes->get('/Pria', 'Home::pria');
$routes->get('/Wanita', 'Home::Wanita');
$routes->get('/Login', 'Home::Login');
$routes->post('/process_login', 'Auth::process_login');