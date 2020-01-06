<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Fund raiser
$route['fund-raisers/v0/create']['POST'] = 'fundraiser/createFundraiser';
$route['fund-raisers/v0/get']['GET'] = 'fundraiser/getFundraiser';
$route['fund-raisers/v0/update/(:any)']['PUT'] = 'fundraiser/updateFundraiser/$1';