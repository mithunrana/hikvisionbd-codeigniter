<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Hikvision';

$route['mega-trading'] = 'Mega_Trading';
$route['hikvision-products'] = 'Products';
$route['hikvision-products/(.+)'] = 'Products/Sub_Category_Product_Select/$1';
$route['hikvision-product/(.+)'] = 'Products/Parent_Category_Product_Select/$1';
$route['solutions/banking-finance'] = 'Solution';
$route['solution/(.+)'] = 'Solution/Solutions/$1';
$route['success-history-hikvision'] = 'AboutHikvision';
$route['contact-us'] = 'ContactUs';
$route['career-hikvision'] = 'Career';
$route['hikvision-support'] = 'Support';
$route['products(.+)'] = 'Product_Details/ProductDetails/$1';
$route['user-login'] = 'UserLogin';
$route['user-signup'] = 'UserSignup';
$route['hikvision-importer-bangladesh'] = 'Hikvision_importer';
$route['hikvision-distributor-bangladesh'] = 'Hikvision_distributor';
$route['hikvision-products-compare'] = 'Product_Compare';
$route['admin-login'] = 'Admin_login';
$route['super-admin'] = 'Super_admin';



$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

