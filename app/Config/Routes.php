<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Home::index');
$routes->get('/libroscarreras','Home::mostrar');
$routes->get('/libroscarreras/(:any)','Home::mostrardetalle/$1');
$routes->get('/librosporcarrera/(:any)', 'Home::mostrarporcarrera/$1');
$routes->get('/librosderecho','Home::mostrarderecho');
$routes->get('/librospsicologia','Home::mostrarpsicologia');
$routes->get('/librosadministracion','Home::mostraradministracion');
$routes->get('/librosautor','Home::mostrarlibrosautor');


/*============================== METODOS DEL ADMINISTRADOR DEL ESTUDIANTE=====================================*/ 

$routes->post('/ingresando','Alumnos::ingresando');
$routes->get('/admbiblioteca','Alumnos::inicio');
$routes->get('/consulta/(:any)','Alumnos::mostrardetalle/$1');
$routes->get('/todoscarrera/(:any)', 'Alumnos::mostrarporcarrera/$1');
$routes->get('/leer/(:any)','Alumnos::leer/$1');
$routes->get('/cerrar','Alumnos::cerrar');

/*====================================== METODOS DE ADMINISTRADOR =====================================*/ 
/*=======================================================================================================
                               METODOS DE ALUMNOS
=========================================================================================================*/
$routes->get('/alumnos','Alumnos::index');
$routes->get('/crearalumnos','Alumnos::create');
$routes->post('/guardaralumnos', 'Alumnos::save');
$routes->get('/editaralumnos/(:any)', 'Alumnos::edit/$1');
$routes->post('/guardarediciona', 'Alumnos::saveedit');
$routes->post('/eliminaralumnos/(:any)', 'Alumnos::delete/$1');
$routes->post('/guardarpassword', 'Alumnos::savepassword');
/*=======================================================================================================
                               METODOS DE CARRERAS
=========================================================================================================*/
$routes->get('/carreras','Areasconocimiento::index');
$routes->get('/crearcarreras','Areasconocimiento::create');
$routes->post('/guardarcarreras', 'Areasconocimiento::save');
$routes->get('/editarcarreras/(:any)', 'Areasconocimiento::edit/$1');
$routes->post('/guardaredicionc', 'Areasconocimiento::saveedit');
$routes->post('/eliminarcarreras/(:any)', 'Areasconocimiento::delete/$1');
/*=======================================================================================================
                               METODOS DE CONSULTAS
=========================================================================================================*/
$routes->get('/consultas','Consultas::index');
$routes->get('/crearconsultas','Consultas::create');
$routes->post('/guardarconsultas', 'Consultas::save');
$routes->get('/editarconsultas', 'Consultas::edit');
$routes->post('/guardaredicionco', 'Consultas::saveedit');
$routes->post('/eliminarconsultas', 'Consultas::delete');
/*=======================================================================================================
                               METODOS DE DESCARGAS
=========================================================================================================*/
$routes->get('/descargas','Descargas::index');
$routes->get('/creardescargas','Descargas::create');
$routes->post('/guardardescargas', 'Descargas::save');
$routes->get('/editardescargas', 'Descargas::edit');
$routes->post('/guardarediciond', 'Descargas::saveedit');
$routes->post('/eliminardescargas', 'Descargas::delete');
/*=======================================================================================================
                               METODOS DE LIBROS
=========================================================================================================*/
$routes->get('/libros','Libros::index');
$routes->get('/crearlibros','Libros::create');
$routes->post('/guardarlibros', 'Libros::save');
$routes->get('/editarlibros/(:any)', 'Libros::edit/$1');
$routes->post('/guardaredicionl', 'Libros::saveedit');
$routes->post('/eliminarl/(:any)', 'Libros::delete/$1');
/*=======================================================================================================
                               METODOS DE USUARIOS
=========================================================================================================*/
$routes->get('/ingresar','Usuarios::loginForm');
$routes->post('/verificar','Usuarios::verifyLogin');
$routes->get('/salir','Usuarios::close');

$routes->get('/usuarios','Usuarios::index');
$routes->get('/crearusuarios','Usuarios::create');
$routes->post('/guardarusuarios', 'Usuarios::save');
$routes->get('/editarusuarios/(:any)', 'Usuarios::edit/$1');
$routes->post('/guardaredicionu', 'Usuarios::saveedit');
$routes->post('/eliminaru/(:any)', 'Usuarios::delete/$1');
$routes->post('/guardarcambio', 'Usuarios::savepassword');
/*=======================================================================================================
                               METODOS DE ROLES
=========================================================================================================*/
$routes->get('/roles','Roles::index');
$routes->get('/crearroles','Roles::create');
$routes->post('/guardarroles', 'Roles::save');
$routes->get('/editarroles/(:any)', 'Roles::edit/$1');
$routes->post('/guardaredicion', 'Roles::saveedit');
$routes->post('/eliminar/(:any)', 'Roles::delete/$1');
/*=======================================================================================================
                               METODOS DE CONFIGURAR
=========================================================================================================*/
$routes->get('/configurar','Configuracion::index');
$routes->post('/guardarconfiguracion','Configuracion::save');

