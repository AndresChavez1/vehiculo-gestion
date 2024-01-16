<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Inicio::index');

$routes->get('/logout', 'Registro::logout');
$routes->match(['get', 'post'],'/login', 'Registro::login');
$routes->match(['get', 'post'],'/registro', 'Registro::registro');
$routes->match(['get', 'post'],'/perfil', 'Registro::perfil');
$routes->match(['get', 'post'],'/cambiar-contrasenia', 'Registro::changePass');


$routes->get('/tablero', 'Tablero::index');

//Asignar Recursos
$routes->get('/asignacion', 'Asignacion::index');

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
$routes->post('dependencia-general', 'Dependencia::store');
//PROVINCIA
$routes->get('provincia-form', 'Dependencia::createProvincia');
$routes->post('provincia-add', 'Dependencia::storeProvincia');
$routes->get('editar-provincia/(:num)', 'Dependencia::showProvincia/$1');
$routes->put('actualizar-provincia', 'Dependencia::updateProvincia');
$routes->get('eliminar-provincia/(:num)', 'Dependencia::deleteProvincia/$1');
//PARROQUIA
$routes->get('parroquia-form', 'Dependencia::createParroquia');
$routes->post('parroquia-add', 'Dependencia::storeParroquia');
$routes->get('editar-parroquia/(:num)', 'Dependencia::showParroquia/$1');
$routes->put('actualizar-parroquia', 'Dependencia::updateParroquia');
$routes->get('eliminar-parroquia/(:num)', 'Dependencia::deleteParroquia/$1');

//DISTRITO
$routes->get('distrito-form', 'Dependencia::createDistrito');
$routes->post('distrito-add', 'Dependencia::storeDistrito');
$routes->get('editar-distrito/(:num)', 'Dependencia::showDistrito/$1');
$routes->put('actualizar-distrito', 'Dependencia::updateDistrito');
$routes->get('eliminar-distrito/(:num)', 'Dependencia::deleteDistrito/$1');

//CIRCUITO
$routes->get('circuito-form', 'Dependencia::createCircuito');
$routes->post('circuito-add', 'Dependencia::storeCircuito');
$routes->get('editar-circuito/(:num)', 'Dependencia::showCircuito/$1');
$routes->put('actualizar-circuito', 'Dependencia::updateCircuito');
$routes->get('eliminar-circuito/(:num)', 'Dependencia::deleteCircuito/$1');

//SUBCIRCUITO
$routes->get('subcircuito-form', 'Dependencia::createSubcircuito');
$routes->post('subcircuito-add', 'Dependencia::storeSubcircuito');
$routes->get('editar-subcircuito/(:num)', 'Dependencia::showSubcircuito/$1');
$routes->put('actualizar-subcircuito', 'Dependencia::updateSubcircuito');
$routes->get('eliminar-subcircuito/(:num)', 'Dependencia::deleteSubcircuito/$1');

//Mantenimiento Vehicular
$routes->get('mantenimiento', 'Mantenimiento::index');
$routes->get('user-form', 'Mantenimiento::create');
$routes->post('mantenimiento-form', 'Mantenimiento::store');
$routes->get('editar-vehiculo/(:num)', 'Mantenimiento::show/$1');
$routes->put('actualizar-vehiculo', 'Mantenimiento::update');
$routes->get('eliminar-mantenimiento/(:num)', 'Mantenimiento::delete/$1');

//DENUNCIAS
$routes->get('denuncias', 'Denuncia::index');
$routes->post('denuncia-form', 'Denuncia::store');
$routes->get('editar-denuncia/(:num)', 'Denuncia::show/$1');
$routes->put('actualizar-denuncia', 'Denuncia::update');
$routes->get('eliminar-denuncia/(:num)', 'Denuncia::delete/$1');