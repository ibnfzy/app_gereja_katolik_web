<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/panel/tata-usaha', 'TataUsahaPanel::index');
$routes->get('/panel/bendahara', 'BendaharaPanel::index');
