<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// admin
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/perangkat-desa', 'Admin::perangkat');
$routes->get('/admin/perangkat-desa/add', 'Admin::addPerangkat');
$routes->post('/admin/perangkat-desa/store', 'Admin::simpanPerangkat');
$routes->get('/admin/perangkat-desa/(:any)/edit', 'Admin::editPerangkat/$1');
$routes->put('/admin/perangkat-desa/(:any)', 'Admin::updatePerangkat/$1');
$routes->delete('/admin/perangkat-desa/(:any)', 'Admin::destroyPerangkat/$1');

$routes->get('/admin/berita', 'Admin::berita');
$routes->get('/admin/berita/add', 'Admin::addBerita');
$routes->post('/admin/berita/store', 'Admin::simpanBerita');
$routes->get('/admin/berita/(:any)/edit', 'Admin::editBerita/$1');
$routes->put('/admin/berita/(:any)', 'Admin::updateBerita/$1');
$routes->delete('/admin/berita/(:any)', 'Admin::destroyBerita/$1');

$routes->get('/admin/penduduk', 'Admin::penduduk');
$routes->get('/admin/penduduk/add', 'Admin::addPenduduk');
$routes->post('/admin/penduduk/store', 'Admin::simpanPenduduk');
$routes->get('/admin/penduduk/(:any)/edit', 'Admin::editPenduduk/$1');
$routes->put('/admin/penduduk/(:any)', 'Admin::updatePenduduk/$1');
$routes->delete('/admin/penduduk/(:any)', 'Admin::destroyPenduduk/$1');