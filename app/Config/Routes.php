<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('view');
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

$routes->get('/', 'Home::view');
$routes->get('pages', 'Home::view/$1');
$routes->get(':any', 'Home::view/$1');


// Auth
$routes->get('about-us', 'Auth::about');
$routes->get('services', 'Services::index');

$routes->match(['get', 'post'],'signin','Auth::signin', ['filter' => 'alreadyloggedin']);
// Admin
$routes->group('',['filter' =>'authcheck'], function($routes){
    
    // Auth
    $routes->get('logout', 'Auth::logout');

    // Categories
    $routes->get('categories-list', 'Categories::index');
    $routes->match(['get', 'post'],'add-category', 'Categories::add');


    // Elements


    // Projets
    $routes->get('projects', 'Projects::index');


    // Réalisations


    // Secteurs


    // Services
    $routes->get('services-list', 'Services::list');
    $routes->get('services/(:segment)', 'Services::details');
    $routes->match(['get', 'post'],'add-service', 'Services::create');
    $routes->put('update-service/(:segment)', 'Services::update/$1');
    $routes->delete('delete-service/(:segment)', 'Services::delete/$1');
    $routes->get('testing', 'Services::testing');


    // Users

   
    $routes->get('profile', 'Users::profile');
    $routes->get('dashboard', 'Users::dashboard');
    $routes->get('details', 'Users::details');
    $routes->get('list', 'Users::list');
});

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
