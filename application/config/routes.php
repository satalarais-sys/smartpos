<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';
$route['dashboard'] = 'dashboard/index';
$route['pos'] = 'pos/index';
$route['products'] = 'products/index';
$route['sales'] = 'sales/index';
$route['logout'] = 'auth/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
