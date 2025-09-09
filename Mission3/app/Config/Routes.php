<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/home', 'Home::index');
    $routes->get('/berita', 'Berita::index');
    $routes->get('/mahasiswa', 'Mahasiswa::index');
    $routes->get('/mahasiswa/detail/(:segment)', 'Mahasiswa::detail/$1');
    $routes->get('/formulir', 'Formulir::index');
    $routes->post('/formulir/create', 'Formulir::create');
});