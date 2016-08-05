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
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'frontend/home';
$route['jelajahproduct'] = 'frontend/jelajahiProduct';
$route['searchgeneral'] = 'frontend/searchGeneral';
$route['hasilsearchgeneral'] = 'frontend/hasilSearchGeneral';
$route['hasilsearchgeneral_nf'] = 'frontend/hasilSearchGeneral_nf';

$route['hasilsearchproduct'] = 'frontend/hasilSearchProduct';
$route['hasilsearchproduct_nf'] = 'frontend/hasilSearchProduct_nf';
$route['karir'] = 'frontend/karir';
$route['contact'] = 'frontend/contact';
$route['menjadireseller'] = 'frontend/menjadiReseller';
$route['temukanwakasa'] = 'frontend/temukanWakasa';
$route['login'] = 'frontend/afterLogin';
$route['tentangkami'] = 'frontend/tentangKami';

$route['search_g'] = 'frontend/search_g';
$route['search_p'] = 'frontend/search_p';
$route['search_p_d'] = 'frontend/search_p_d';
$route['search_wakasa'] = 'frontend/search_wakasa';
$route['set_lang_eng'] = 'frontend/set_lang_eng';
$route['set_lang_ina'] = 'frontend/set_lang_ina';
$route['set_reg_no'] = 'frontend/set_reg_no';
$route['user_logout'] = 'frontend/user_logout';


$route['sp'] = 'Frontend/sp';
$route['sp_mk'] = 'Frontend/sp_mk';
$route['cekS'] = 'Frontend/cekS';
$route['SearchProduct'] = 'Frontend/SearchProduct';

$route['spik'] = 'Frontend/spik';
$route['spid'] = 'Frontend/spid';
$route['spikd'] = 'Frontend/spikd';
$route['spk'] = 'Frontend/spk';
$route['spd'] = 'Frontend/spd';
$route['spkd'] = 'Frontend/spkd';

$route['client_message'] = 'Frontend/client_message';
$route['client_subscribe'] = 'Frontend/client_subscribe';

$route['search_product_temp'] = 'frontend/search_product_temp';