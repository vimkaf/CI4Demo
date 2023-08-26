<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::home');

$routes->get('/about', 'Home::about');

$routes->get('students', 'Students::index');

$routes->get('students/create', 'Students::showstudentform');

$routes->post('students/create', 'Students::savestudent');

$routes->get('student/edit/(:num)','Students::editstudent/$1');

$routes->post('students/update/(:num)', 'Students::updatestudent/$1');


$routes->get('student/delete/(:num)','Students::deletestudent/$1');
