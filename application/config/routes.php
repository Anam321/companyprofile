<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['app-admin/login'] = 'auth/index';
$route['app-admin/logout'] = 'auth/logout';

$route['app-admin/dashboard'] = 'dashboard/index';

$route['app-admin/pages/about'] = 'about/index';

$route['app-admin/pages/service'] = 'service/index';
$route['app-admin/pages/service/form'] = 'service/form';
$route['app-admin/pages/service/edit/(:any)'] = 'service/edit/$1';
$route['app-admin/pages/service/datatable'] = 'service/dataTables';
$route['app-admin/service/insertData'] = 'service/insertData';
$route['app-admin/service/updateData'] = 'service/updateData';
$route['app-admin/service/delete_data/(:any)'] = 'service/delete_data/$1';

$route['app-admin/project'] = 'project/index';
$route['app-admin/project/datatable'] = 'project/dataTables';
$route['app-admin/project/form'] = 'project/form';
$route['app-admin/project/edit/(:any)'] = 'project/edit/$1';
$route['app-admin/project/confirm/(:any)'] = 'project/confirm/$1';
$route['app-admin/project/insertData'] = 'project/insertData';
$route['app-admin/project/updateData'] = 'project/updateData';
$route['app-admin/project/delete_data/(:any)'] = 'project/delete_data/$1';

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
