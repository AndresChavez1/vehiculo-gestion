<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Inicio::index', ['filter' => 'noauth']);

$routes->get('/logout', 'Registro::logout');
$routes->match(['get', 'post'],'/login', 'Registro::login', ['filter' => 'noauth']);
$routes->match(['get', 'post'],'/registro', 'Registro::registro', ['filter' => 'noauth']);
$routes->match(['get', 'post'],'/perfil', 'Registro::perfil' , ['filter' => 'auth']);
$routes->match(['get', 'post'],'/cambiar-contrasenia', 'Registro::contraseña');
$routes->get('/tablero', 'Tablero::index', ['filter' => 'auth']);

//Asignar Recursos
$routes->get('/asignacion', 'Asignacion::index', ['filter' => 'auth']);
$routes->put('/personal-sub', 'Asignacion::updatePersonal', ['filter' => 'auth']);
$routes->put('/vehiculo-sub', 'Asignacion::updateVehiculo', ['filter' => 'auth']);

//CRUD Gestión Personal Arreglada
$routes->get('personal', 'Personal::index', ['filter' => 'auth']);
$routes->get('user-form', 'Personal::create', ['filter' => 'auth']);
$routes->post('personal-form', 'Personal::store', ['filter' => 'auth']);
$routes->get('editar-personal/(:num)', 'Personal::show/$1', ['filter' => 'auth']);
$routes->put('actualizar-personal', 'Personal::update', ['filter' => 'auth']);
$routes->get('eliminar-personal/(:num)', 'Personal::delete/$1', ['filter' => 'auth']);

//CRUD Gestión Vehicular Arreglada
$routes->get('vehiculo', 'Vehiculo::index', ['filter' => 'auth']);
$routes->get('user-form', 'Vehiculo::create', ['filter' => 'auth']);
$routes->post('vehiculo-form', 'Vehiculo::store', ['filter' => 'auth']);
$routes->get('editar-vehiculo/(:num)', 'Vehiculo::show/$1', ['filter' => 'auth']);
$routes->put('actualizar-vehiculo', 'Vehiculo::update', ['filter' => 'auth']);
$routes->get('eliminar-vehiculo/(:num)', 'Vehiculo::delete/$1', ['filter' => 'auth']);

//CRUD Gestión Dependencia 
$routes->get('dependencia', 'Dependencia::index', ['filter' => 'auth']);
$routes->post('dependencia-general', 'Dependencia::store', ['filter' => 'auth']);
//PROVINCIA
$routes->get('provincia-form', 'Dependencia::createProvincia', ['filter' => 'auth']);
$routes->post('provincia-add', 'Dependencia::storeProvincia', ['filter' => 'auth']);
$routes->get('editar-provincia/(:num)', 'Dependencia::showProvincia/$1', ['filter' => 'auth']);
$routes->put('actualizar-provincia', 'Dependencia::updateProvincia', ['filter' => 'auth']);
$routes->get('eliminar-provincia/(:num)', 'Dependencia::deleteProvincia/$1', ['filter' => 'auth']);
//PARROQUIA
$routes->get('parroquia-form', 'Dependencia::createParroquia', ['filter' => 'auth']);
$routes->post('parroquia-add', 'Dependencia::storeParroquia', ['filter' => 'auth']);
$routes->get('editar-parroquia/(:num)', 'Dependencia::showParroquia/$1', ['filter' => 'auth']);
$routes->put('actualizar-parroquia', 'Dependencia::updateParroquia', ['filter' => 'auth']);
$routes->get('eliminar-parroquia/(:num)', 'Dependencia::deleteParroquia/$1', ['filter' => 'auth']);

//DISTRITO
$routes->get('distrito-form', 'Dependencia::createDistrito', ['filter' => 'auth']);
$routes->post('distrito-add', 'Dependencia::storeDistrito', ['filter' => 'auth']);
$routes->get('editar-distrito/(:num)', 'Dependencia::showDistrito/$1', ['filter' => 'auth']);
$routes->put('actualizar-distrito', 'Dependencia::updateDistrito', ['filter' => 'auth']);
$routes->get('eliminar-distrito/(:num)', 'Dependencia::deleteDistrito/$1', ['filter' => 'auth']);

//CIRCUITO
$routes->get('circuito-form', 'Dependencia::createCircuito', ['filter' => 'auth']);
$routes->post('circuito-add', 'Dependencia::storeCircuito', ['filter' => 'auth']);
$routes->get('editar-circuito/(:num)', 'Dependencia::showCircuito/$1', ['filter' => 'auth']);
$routes->put('actualizar-circuito', 'Dependencia::updateCircuito', ['filter' => 'auth']);
$routes->get('eliminar-circuito/(:num)', 'Dependencia::deleteCircuito/$1', ['filter' => 'auth']);

//SUBCIRCUITO
$routes->get('subcircuito-form', 'Dependencia::createSubcircuito', ['filter' => 'auth']);
$routes->post('subcircuito-add', 'Dependencia::storeSubcircuito', ['filter' => 'auth']);
$routes->get('editar-subcircuito/(:num)', 'Dependencia::showSubcircuito/$1', ['filter' => 'auth']);
$routes->put('actualizar-subcircuito', 'Dependencia::updateSubcircuito', ['filter' => 'auth']);
$routes->get('eliminar-subcircuito/(:num)', 'Dependencia::deleteSubcircuito/$1', ['filter' => 'auth']);

//Mantenimiento Vehicular
$routes->get('mantenimiento', 'Mantenimiento::index', ['filter' => 'auth']);
$routes->get('user-form', 'Mantenimiento::create', ['filter' => 'auth']);
$routes->post('mantenimiento-form', 'Mantenimiento::store', ['filter' => 'auth']);
$routes->get('editar-vehiculo/(:num)', 'Mantenimiento::show/$1', ['filter' => 'auth']);
$routes->put('actualizar-mantenimiento', 'Mantenimiento::update', ['filter' => 'auth']);
$routes->get('eliminar-mantenimiento/(:num)', 'Mantenimiento::delete/$1', ['filter' => 'auth']);

//DENUNCIAS
$routes->get('denuncias', 'Denuncia::index');
$routes->post('denuncia-form', 'Denuncia::store');
$routes->get('editar-denuncia/(:num)', 'Denuncia::show/$1');
$routes->put('actualizar-denuncia', 'Denuncia::update');
$routes->get('eliminar-denuncia/(:num)', 'Denuncia::delete/$1');