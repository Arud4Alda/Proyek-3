<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello', 'Mahasiswa::hello');
$routes->get('/tabel1', 'Mahasiswa::tabel1');
$routes->get('/tabel2', 'Mahasiswa::tabel2');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/detail/(:segment)', 'Mahasiswa::detail/$1');
