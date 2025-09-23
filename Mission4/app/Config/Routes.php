<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// Admin routes
$routes->group('admin', ['filter' => 'adminauth'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('mahasiswa', 'Admin::mahasiswa');
    $routes->get('mahasiswa/tambah', 'Admin::tambahMahasiswa');
    $routes->post('mahasiswa/simpan', 'Admin::simpanMahasiswa');
    $routes->get('mahasiswa/edit/(:num)', 'Admin::editMahasiswa/$1');
    $routes->post('mahasiswa/update/(:num)', 'Admin::updateMahasiswa/$1');
    $routes->get('mahasiswa/hapus/(:num)', 'Admin::hapusMahasiswa/$1');

    $routes->get('course', 'Admin::course');
    $routes->get('course/tambah', 'Admin::tambahCourse');
    $routes->post('course/simpan', 'Admin::simpanCourse');
    $routes->get('course/edit/(:segment)', 'Admin::editCourse/$1');
    $routes->post('course/update/(:segment)', 'Admin::updateCourse/$1');
    $routes->get('course/hapus/(:segment)', 'Admin::hapusCourse/$1');
});

// Student routes
$routes->group('mahasiswa', ['filter' => 'mahasiswaauth'], function($routes) {
    $routes->get('dashboard', 'Mahasiswa::dashboard');
    $routes->get('courses', 'Mahasiswa::courses');
    $routes->post('enroll', 'Mahasiswa::enroll');
    // $routes->get('enroll/(:num)', 'Mahasiswa::enroll/$1');
    $routes->get('mycourses', 'Mahasiswa::myCourses');
});
