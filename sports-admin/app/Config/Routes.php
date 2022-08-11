<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('login','Login::index');
$routes->get('lock','Dashboard::lock');
$routes->get('dashboard','Dashboard::index');
$routes->get('users','User::userList');
$routes->get('coach','SportsCoach::index');
$routes->get('sports-timings','SportsTimings::index');
$routes->get('sports-type','SportsType::index');
$routes->get('user-role','User::userRole');
$routes->get('profile','User::profile');
$routes->get('view-enquiry/(:any)','Enquiry::viewEnquiry/$1');
$routes->get('enquiry','Enquiry::enquiryList');
$routes->get('no-rights','common::noRights');


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
