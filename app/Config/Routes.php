<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/auth/login', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/forgotPassword', 'Auth::forgotPassword');
$routes->get('/auth/eResponse', 'Auth::eResponse');
$routes->get('/auth/laporFT', 'Auth::laporFT');
$routes->get('/auth/tambahPengajuan', 'Auth::tambahPengajuan');
$routes->post('/auth/submitPengajuan', 'Auth::submitPengajuan');
$routes->get('/auth/dashboard', 'Auth::dashboard');
$routes->get('/auth/eServices', 'Auth::underDevelopment');
$routes->get('/auth/eCommandCenter', 'Auth::underDevelopment');
$routes->get('/auth/eCommerce', 'Auth::underDevelopment');
$routes->get('/auth/eOffice', 'Auth::underDevelopment');
$routes->get('/auth/kuisioner', 'Auth::underDevelopment');
$routes->get('/auth/faq', 'Auth::underDevelopment');
$routes->get('/auth/profile', 'Auth::underDevelopment');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/pengajuan/tambah', 'Pengajuan::tambah');
$routes->post('/pengajuan/proses', 'Pengajuan::proses');



