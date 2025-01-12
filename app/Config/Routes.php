<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('courses', 'Course::index');
$routes->get('course/(:num)', 'Course::detail/$1');

$routes->get('instructors', 'Instructor::index');
$routes->get('instructors/(:num)', 'Instructor::detail/$1');
