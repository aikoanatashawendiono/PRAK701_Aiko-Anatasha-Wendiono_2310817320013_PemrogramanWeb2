<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/buku', 'Buku::index');
    $routes->get('/buku/create', 'Buku::create');          // Form tambah
    $routes->post('/buku/store', 'Buku::store');           // Proses tambah
    $routes->get('/buku/edit/(:num)', 'Buku::edit/$1');    // Form edit
    $routes->post('/buku/update/(:num)', 'Buku::update/$1'); // Proses edit
    $routes->post('/buku/delete/(:num)', 'Buku::delete/$1'); // Hapus
});
