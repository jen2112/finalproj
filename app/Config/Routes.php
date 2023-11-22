<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->post('/Infos', 'InformationController::insertInformation');
$routes->get('/information', 'InformationController::Information');
$routes->get('/signup', 'SignupController::signup');
$routes->get('/hi', 'SignupController::hi');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/', 'InformationController::index');
$routes->get('finance', 'InformationController::Finance');
$routes->get('barangay', 'InformationController::barangay');
$routes->get('events', 'InformationController::events');
$routes->get('contact', 'InformationController::contact');
