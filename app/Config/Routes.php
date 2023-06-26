<?php

namespace Config;

use App\Controllers\dashboard;

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(True);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'beranda::index');
$routes->get('/about', 'beranda::about');
$routes->get('/contact', 'beranda::contact');
$routes->get('/dashboard', 'dashboard::index');
$routes->get('/dashboarduser', 'user::index');
$routes->get('/login', 'login::index');
$routes->get('/loginuser', 'login::user');
$routes->get('/registrasi', 'registrasi::index');
$routes->post('/process', 'registrasi::process');
$routes->post('/mobil', 'data::index');
$routes->get('/merek', 'dashboard::merek');
$routes->get('/mobil', 'dashboard::mobil');
$routes->get('/customer', 'dashboard::customer');
$routes->get('/pembayaran', 'dashboard::pembayaran');
$routes->get('/pesanan', 'dashboard::pesanan');
$routes->get('/perjalanan', 'dashboard::perjalanan');



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
