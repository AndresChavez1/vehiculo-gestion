<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Personal::index');
$routes->get('/registro', 'Registro::index');
$routes->get('/login', 'Login::index');
$routes->get('/tablero', 'Tablero::index');

//CRUD Gestión Personal
$routes->get('gestion-personal', 'GestionPersonal::index');
$routes->get('user-form', 'GestionPersonal::create');
$routes->post('enviar-form', 'GestionPersonal::store');
$routes->get('editar/(:num)', 'GestionPersonal::show/$1');
$routes->post('actualizar', 'GestionPersonal::update');
$routes->get('eliminar/(:num)', 'GestionPersonal::delete/$1');

//CRUD Gestión Vehicular
$routes->get('gestion-vehicular', 'GestionVehicular::index');
$routes->get('vehiculo-form', 'GestionVehicular::create');
$routes->post('guardar-form', 'GestionVehicular::store');
$routes->get('editar/(:num)', 'GestionVehicular::show/$1');
$routes->post('actualizar', 'GestionVehicular::update');
$routes->get('eliminar/(:num)', 'GestionVehicular::delete/$1');