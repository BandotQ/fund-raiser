<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$this->set_directory('v0');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Fund raiser
$route['fund-raisers/']['POST'] = 'fundraiser/createFundraiser';
$route['fund-raisers/(:any)']['GET'] = 'fundraiser/getFundraiser';
$route['fund-raisers/(:any)']['PUT'] = 'fundraiser/updateFundraiser/$1';

//Fund raiser collections
$route['fund-raisers/(:any)/collections']['POST'] = 'v0/fundraisercollections/createFundraiserCollection';