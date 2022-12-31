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
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

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
$routes->get('contact', 'Home::contact');

// Cart
// // $routes->get('checkout', 'Carts::checkout');
$routes->add('shopping', 'Carts::shopping');
$routes->add('carts/load', 'Carts::load');
$routes->add('carts/add', 'Carts::add');
$routes->add('carts/remove', 'Carts::remove');
$routes->add('carts/clear', 'Carts::clear');
$routes->add('view', 'Carts::view');

$routes->get('service-details/(:any)', 'Carts::detail/$1');
$routes->get('unity/(:any)', 'Carts::unity/$1');
$routes->get('success', 'Carts::success');


// Projects
$routes->get('projects', 'Projects::index');
$routes->post('message', 'Auth::message');

// Services
$routes->get('services', 'Services::index');
$routes->get('services/(:segment)', 'Services::details/$1');

// Team
$routes->get('team', [\App\Controllers\Home::class, 'team']);
$routes->get('blog', [\App\Controllers\Home::class, 'blog']);

$routes->match(['get', 'post'],'signin','Auth::signin', ['filter' => 'alreadyloggedin']);
// Admin
$routes->group('',['filter' =>'authcheck'], function($routes){
    
    // Auth
    $routes->get('logout', 'Auth::logout');

    // Cart
    // $routes->get('checkout', 'Carts::checkout');

    $routes->add('dealing/(:any)/(:any)', 'Carts::dealing/$1/$2');
    $routes->add('cart-details/(:any)', 'Carts::details/$1');  
    $routes->add('cart-see-proof', 'Carts::proofing');

    // Categories
    $routes->get('categories-list', 'Categories::index');
    $routes->match(['get', 'post'],'add-category', 'Categories::add');

    // Coords
    $routes->get('coords', 'Coords::index');    
    $routes->post('coords-update', 'Coords::update'); 

    // Documents
    $routes->get('documents', 'Documents::list');    
    $routes->match(['get', 'post'],'add-document', 'Documents::createDocument');
    $routes->add('delete-document/(:segment)', 'Documents::delete/$1');

    // Accueil
    $routes->get('accueil-edit', 'Accueils::edit');
    $routes->add('update-accueil', 'Accueils::update');

    // Elements
    $routes->get('elements', 'Elements::index');
    $routes->match(['get', 'post'],'add-element', 'Elements::add');
    $routes->get('element/edit/(:num)', 'Elements::edit/$1');
    $routes->add('update-element', 'Elements::update');
    $routes->get('element-image/(:num)', 'Elements::addImage/$1');
    $routes->add('element-update-image', 'Elements::saveImage');
    $routes->add('delete-element/(:segment)', 'Elements::delete/$1');


    // Partenaires
    $routes->get('partners-list', 'Partners::index');
    $routes->match(['get', 'post'],'add-partner', 'Partners::add');

    

    // Réalisations

    // Secteurs


    // Services
    $routes->get('services-list', 'Services::list');
    $routes->get('services/(:segment)', 'Services::details');
    $routes->match(['get', 'post'],'add-service', 'Services::create');
    $routes->get('service/edit/(:num)', 'Services::edit/$1');
    $routes->add('update-service', 'Services::update');
    $routes->get('service-image/(:num)', 'Services::image/$1');
    $routes->post('service-update-image', 'Services::saveImage');
    $routes->delete('delete-service/(:segment)', 'Services::delete/$1');
    $routes->get('testing', 'Services::testing');

    // Team 
    $routes->get('team-list', 'Teams::list');
    $routes->match(['get', 'post'],'add-team', 'Teams::create');
    $routes->get('team-image/(:num)', 'Teams::image/$1');
    $routes->post('team-update-image', 'Teams::saveImage');
    $routes->add('delete-member/(:num)', 'Teams::delete/$1');
    $routes->get('team-edit/(:num)', 'Teams::edit/$1');
    $routes->add('update-team', 'Teams::update');

    // Users   
    $routes->get('profile', 'Users::profile');
    $routes->get('dashboard', 'Users::dashboard');
    $routes->get('details', 'Users::details');
    $routes->get('list', 'Users::list');
    $routes->get('add-picture', 'Users::addImage');
    $routes->post('save-picture', 'Users::saveImage');
    $routes->post('update-one-self', 'Users::updateOneSelf');
});



// $routes->set404Override(function(){
//     $model = model(Coord::class);
//     $coords =  $model->first();
//     $data = [
//         'title'=> 'Erreur',
//         'coords'=> $coords
//     ];
//     return view('errors/404.php',$data);
// });

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
