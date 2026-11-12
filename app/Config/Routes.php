<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/buku','Book::index');
$routes->get('/buku/tambah', 'Book::create');
$routes->post('/buku', 'Book::store');
$routes->get('/buku/(:num)', 'Book::show/$1');
$routes->get('/buku/(:num)/edit', 'Book::edit/$1');
$routes->post('/buku/(:num)', 'Book::update/$1');
$routes->post('buku/(:num)/hapus', 'Book::delete/$1');
