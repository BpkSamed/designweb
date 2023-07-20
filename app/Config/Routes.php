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
$routes->setDefaultController('control_project');
$routes->setDefaultMethod('hal_pertama');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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

//$routes->get('/', 'login::index');
//$routes->get('/login', 'login::index');
//$route['login'] = 'login/index';

$routes->get('/hal_depan_web', 'control_project::hal_pertama');
$routes->get('/product', 'control_project::hal_produk');
$routes->get('/about', 'control_project::hal_about');
$routes->get('/contact', 'control_project::hal_contact');
$routes->get('/account', 'control_project::hal_account');
$routes->get('/daftar', 'control_project::hal_daftar');
$routes->get('/belanja', 'control_project::hal_belanja');
$routes->post('/account/process', 'control_project::process');
$routes->post('/daftar/register', 'control_project::register');
$routes->post('/belanja/submit', 'BelanjaController::submit');

$routes->get('/', 'Home::index');
$routes->get('/karyawan', 'Karyawan::index');

$routes->get('/karyawan/add', 'Karyawan::add');
$routes->post('/karyawan/create', 'Karyawan::create');

$routes->get('/karyawan/delete', 'Karyawan::delete');
$routes->post('/karyawan/delete', 'Karyawan::delete');

$routes->get('/karyawan/edit', 'Karyawan::edit');
$routes->post('/karyawan/update', 'Karyawan::update');



$routes->get('/home_PK2', 'control_project::hal_home_pk2');
$routes->get('/about_PK2', 'control_project::hal_about_pk2');
$routes->get('/portofolio_PK2', 'control_project::hal_portofolio_pk2');
$routes->get('/pricing_PK2', 'control_project::hal_pricing_pk2');
$routes->get('/contact_PK2', 'control_project::hal_contact_pk2');

$routes->get('/register_view', 'Register::index');
$routes->post('/register_view/process', 'Register::process');
$routes->get('/login_view', 'Login2::index');
$routes->post('/login_view/process', 'Login2::process');
$routes->get('/logout_view', 'Login2::logout');

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
