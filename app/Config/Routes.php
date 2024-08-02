<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/contentHome', 'Home::contentHome');
$routes->post('/changeRole', 'Login::changeRole');

//login
$routes->get('/Signin', 'Login::index');
$routes->post('/Signin', 'Login::index');
$routes->get('/logout', 'Login::Logout');

// User
$routes->get('UserAdmin', 'User::index');
$routes->post('callUserAdmin', 'User::dataJson');
$routes->post('getNipId', 'User::getPgwId');
$routes->post('insertAdmin', 'User::simpanData');
$routes->post('userDel', 'User::deleteUser');

//Category Document
$routes->get('CategoryDoc', 'CategoryDoc::index');
$routes->post('callCategoryDoc', 'CategoryDoc::dataJson');
$routes->post('getMainCategory', 'CategoryDoc::mainCategory');
$routes->post('insertDataCat', 'CategoryDoc::addDataCategory');
$routes->post('categoryDel', 'CategoryDoc::deleteCat');


