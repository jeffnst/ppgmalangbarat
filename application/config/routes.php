<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = '';
$route['404_override'] = 'welcome/not_found';
$route['translate_uri_dashes'] = FALSE;
//AUTH
$route['submit_login'] = 'authentication/authentication/submit_login';
$route['admin/logout'] = 'admin/authentication/logout';
$route['login'] = 'authentication/authentication/login';
$route['logout'] = 'authentication/authentication/logout';

//DASHBOARD
$route['admin'] = 'admin/admin/dashboard';
$route['admin/404'] = 'admin/admin/notfound';

//TPQ
$route['admin/tpq'] = 'admin/tpq/data';
$route['admin/tpq/detail/(:any)'] = 'admin/tpq/detail';
$route['admin/tpq/add'] = 'admin/tpq/add';
$route['admin/tpq/delete/(:any)'] = 'admin/tpq/delete_submit';
$route['admin/tpq/add_submit'] = 'admin/tpq/add_submit';
$route['admin/tpq/update_submit'] = 'admin/tpq/update_submit';

//PENGAJAR
$route['admin/pengajar'] = 'admin/pengajar/data';
$route['admin/pengajar/detail/(:any)'] = 'admin/pengajar/detail';
$route['admin/pengajar/add'] = 'admin/pengajar/add';
$route['admin/pengajar/add_submit'] = 'admin/pengajar/add_submit';
$route['admin/pengajar/update_submit'] = 'admin/pengajar/update_submit';
$route['admin/pengajar/delete/(:any)'] = 'admin/pengajar/delete_submit';

//SISWA
$route['admin/siswa'] = 'admin/siswa/data';
$route['admin/siswa/detail/(:any)'] = 'admin/siswa/detail';
$route['admin/siswa/add'] = 'admin/siswa/add';
$route['admin/siswa/add_submit'] = 'admin/siswa/add_submit';
$route['admin/siswa/update_submit'] = 'admin/siswa/update_submit';
$route['admin/siswa/delete/(:any)'] = 'admin/siswa/delete_submit';

