<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('/Auth', function ($routes) {
    $routes->get('login', 'Auth::login');
});
$routes->get('/panel/tata-usaha', 'TataUsahaPanel::index');
$routes->get('/panel/bendahara', 'BendaharaPanel::index');
