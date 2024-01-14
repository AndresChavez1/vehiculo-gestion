<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Inicio::index');
$routes->get('/login', 'Registro::login');
$routes->match(['get', 'post'],'/registro', 'Registro::registro');
$routes->get('/tablero', 'Tablero::index');

//CRUD Gestión Personal
$routes->get('gestion-personal', 'GestionPersonal::index');
$routes->get('get', 'GestionPersonal::getRango');
$routes->get('user-form', 'GestionPersonal::create');
$routes->post('enviar-form', 'GestionPersonal::store');
$routes->get('editar/(:num)', 'GestionPersonal::show/$1');
$routes->post('actualizar', 'GestionPersonal::update');
$routes->get('eliminar/(:num)', 'GestionPersonal::delete/$1');

//CRUD Gestión Vehicular
/*$routes->get('gestion-vehicular', 'GestionVehicular::index');
$routes->get('vehiculo-form', 'GestionVehicular::create');
$routes->post('guardar-form', 'GestionVehicular::store');
$routes->get('editar-vehiculo/(:num)', 'GestionVehicular::show/$1');
$routes->post('actualizar-vehiculo', 'GestionVehicular::update');
$routes->get('eliminar-vehiculo/(:num)', 'GestionVehicular::delete/$1');*/

//CRUD Gestión Vehicular
$routes->get('gestion-dependencia', 'GestionDependencia::getData');
$routes->get('rango-dependencia', 'GestionDependencia::getPersonal');
$routes->post('guardar-form', 'GestionDependencia::store');

//CRUD Gestión Personal Arreglada
$routes->get('personal', 'Personal::index');
$routes->get('user-form', 'Personal::create');
$routes->post('personal-form', 'Personal::store');
$routes->get('editar-personal/(:num)', 'Personal::show/$1');
$routes->put('actualizar-personal', 'Personal::update');
$routes->get('eliminar-personal/(:num)', 'Personal::delete/$1');

//CRUD Gestión Vehicular Arreglada
$routes->get('vehiculo', 'Vehiculo::index');
$routes->get('user-form', 'Vehiculo::create');
$routes->post('vehiculo-form', 'Vehiculo::store');
$routes->get('editar-vehiculo/(:num)', 'Vehiculo::show/$1');
$routes->put('actualizar-vehiculo', 'Vehiculo::update');
$routes->get('eliminar-vehiculo/(:num)', 'Vehiculo::delete/$1');

//CRUD Gestión Dependencia 
$routes->get('dependencia', 'Dependencia::index');
$routes->get('user-form', 'Dependencia::create');
$routes->post('dependencia-general', 'Dependencia::store');
$routes->post('dependencia-add', 'Dependencia::storeDependencia');
$routes->post('provincia-add', 'Dependencia::storeProvincia');
$routes->post('distrito-add', 'Dependencia::storeDistrito');
$routes->post('circuito-add', 'Dependencia::storeCircuito');
$routes->post('subcircuito-add', 'Dependencia::storeSubcircuito');
$routes->get('editar-vehiculo/(:num)', 'Dependencia::show/$1');
$routes->put('actualizar-vehiculo', 'Dependencia::update');
$routes->get('eliminar-vehiculo/(:num)', 'Dependencia::delete/$1');

//Mantenimiento Vehicular
$routes->get('mantenimiento', 'Mantenimiento::index');
$routes->get('user-form', 'Mantenimiento::create');
$routes->post('mantenimiento-form', 'Mantenimiento::store');
$routes->get('editar-vehiculo/(:num)', 'Mantenimiento::show/$1');
$routes->put('actualizar-vehiculo', 'Mantenimiento::update');
$routes->get('eliminar-mantenimiento/(:num)', 'Mantenimiento::delete/$1');