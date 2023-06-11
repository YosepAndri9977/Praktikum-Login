<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('todo', 'Control::tampil');
$routes->post('todo/tambah', 'Control::tambah');
$routes->get('todo/selesai/(:num)', 'Control::selesai/$1');
$routes->get('todo/hapus/(:num)', 'Control::hapus/$1');
$routes->get('ktp', 'Ktp::index'); // untuk mengatur file berdasarkan request 
$routes->get('Ktm', 'Ktm::index');// untuk mengatur file berdasarkan request 
$routes->get('DataKelulusan', 'InputKelulusan::index');// untuk mengatur file berdasarkan request 
$routes->get('Input', 'InputKelulusan::prosesLulus');
$routes->get('input', 'PesanController::input');// untuk mengatur file berdasarkan request 
$routes->get('proses', 'PesanController::proses');
$routes->get('asisten', 'AsistenController::index');//digunakan untuk mengatur file dan mendefinisikan sebuah route pada aplikasi web
// $routes->get('/coba', 'Coba::index');
// $routes->get('/users', 'Admin\Users::index');
// $routes->get('ktp', 'Ktp::index'); 
// $routes->get('input', 'PesanController::input');
// $routes->get('proses', 'PesanController::proses');

use App\Controllers\Pages;
use App\Controllers\News;

$routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('news', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

// use App\Controllers\Login;

// $routes->get('login/home', [Login::class, 'home']);
// $routes->get('login', 'Login::index');
// $routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);
// $routes->get('login/logout', [Login::class, 'logout']);


use App\Controllers\AsistenController2;

$routes->match(['get', 'post'], 'asisten/simpan',[AsistenController2::class, 'simpan']);

$routes->match(['get', 'post'], 'asisten/update',[AsistenController2::class, 'update']);

$routes->match(['get', 'post'], 'asisten/delete',[AsistenController2::class, 'delete']);



use App\Controllers\LoginControl;
$routes->match(['get', 'post'], 'login/check', [LoginControl::class, 'check']);
$routes->get('login/logout', [LoginControl::class, 'logout']);
$routes->get('asisten/login', [LoginControl::class, 'index']);
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
