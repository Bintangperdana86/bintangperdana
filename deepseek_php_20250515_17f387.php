<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Auth Routes
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

// Admin Routes
$route['admin'] = 'admin/index';
$route['admin/profile'] = 'admin/profile';
$route['admin/tables'] = 'admin/tables';

$route['default_controller'] = 'auth/login'; // Default ke halaman login
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;