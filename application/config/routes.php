<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['app-admin/login'] = 'auth/login';

$route['about'] = 'main/about';
$route['service'] = 'main/service';
$route['portfolio'] = 'main/portfolio';
$route['blog'] = 'main/blog';
$route['contact'] = 'main/contact';
$route['contact/form/send_message'] = 'main/send_message';
$route['contact/form/sendNews'] = 'main/sendNews';
$route['blog/(:any)'] = 'main/blog_detail/$1';
