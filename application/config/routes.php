<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['app-admin/login'] = 'auth/index';
$route['app-admin/logout'] = 'auth/logout';

$route['app-admin/dashboard'] = 'dashboard/index';

$route['app-admin/pages/about'] = 'about/index';


$route['about'] = 'main/about';
$route['terms'] = 'main/terms';
$route['privacy'] = 'main/privacy';
$route['faqs'] = 'main/faqs';
$route['service'] = 'main/service';
$route['portfolio'] = 'main/portfolio';
$route['blog'] = 'main/blog';
$route['contact'] = 'main/contact';
$route['contact/form/send_message'] = 'main/send_message';
$route['contact/form/sendNews'] = 'main/sendNews';
$route['blog/(:any)'] = 'main/blog_detail/$1';
$route['portfolio/(:any)'] = 'main/portfolio_detail/$1';
$route['service/(:any)'] = 'main/service_detail/$1';
$route['categori/(:any)'] = 'main/categori/$1';
