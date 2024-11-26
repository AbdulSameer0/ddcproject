<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
/********************************************************************/
$routes->get('/', 'Admin::index');                                          // admin login page
$routes->post('admin/login', 'Admin::login');                               // admin login
$routes->get('admin/dashboard', 'Admin::dashboard');                        // admin redirect to the dashboard
$routes->get('admin/logout', 'Admin::logout');                              // admin logout
$routes->post('admin/saveDetails', 'Admin::saveDetails');                   // add programme details 
$routes->post('admin/deleteDetails', 'Admin::deleteDetails');                // delete programme details
// $routes->post('admin/getRecordDetails', 'Admin::getRecordDetails');
// $routes->post('admin/updateRecord/(:num)', 'Admin::updateRecord/$id');
$routes->post('admin/getRecordDetails', 'Admin::getRecordDetails'); // For fetching details
$routes->post('admin/updateRecord', 'Admin::updateRecord');        // For updating details


// $routes->get('admin/testing', 'Admin::testing');

