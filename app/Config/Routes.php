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
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Body::index');
$routes->get('/home', 'Body::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/kategori', 'Kategori::index');
$routes->add('/kategori/add', 'Kategori::tambah');
$routes->add('/kategori/(:segment)/edit', 'Kategori::edit/$1');
$routes->get('/kategori/(:segment)/delete', 'Kategori::delete/$1');
$routes->get('/buku', 'Buku::index');
$routes->add('/buku/add', 'Buku::tambah');
$routes->add('/buku/(:segment)/edit', 'Buku::edit/$1');
$routes->get('/buku/(:segment)/delete', 'Buku::delete/$1');
$routes->get('/user', 'User::index');
$routes->add('/user/add', 'User::tambah');
$routes->add('/user/(:segment)/edit', 'User::edit/$1');
$routes->get('/user/(:segment)/delete', 'User::delete/$1');
$routes->get('/transaksi', 'Transaksi::index');
$routes->add('/transaksi/add', 'Transaksi::tambah');
$routes->add('/transaksi/(:segment)/edit', 'Transaksi::edit/$1');
$routes->get('/transaksi/(:segment)/delete', 'Transaksi::delete/$1');
$routes->get('/detailtransaksi', 'Detailtransaksi::index');
$routes->add('/detailtransaksi/add', 'Detailtransaksi::tambah');
$routes->add('/detailtransaksi/(:segment)/edit', 'Detailtransaksi::edit/$1');
$routes->get('/detailtransaksi/(:segment)/delete', 'Detailtransaksi::delete/$1');
$routes->get('/login', 'Login::index');
$routes->get('/login_action', 'Login::login_action');
$routes->get('/register', 'Register::index');
$routes->get('/register/simpan', 'Register::simpan');
$routes->add('/kategoribuku', 'KategoriBuku::index');
$routes->add('/kategoribuku/(:segment)/view', 'KategoriBuku::view/$1');
$routes->add('/kategoribuku/(:segment)/detail', 'KategoriBuku::detail/$1');
$routes->get('/cart', 'Cart::index');
$routes->post('/cartAdd', 'Cart::tambahCart');
$routes->get('/cart/(:segment)/delete', 'Cart::delete/$1');
$routes->add('/checkout', 'Cart::checkout');
$routes->add('/cart/(:segment)/finishTrans', 'Cart::finishTrans/$1');





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
