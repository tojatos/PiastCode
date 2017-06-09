<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'Main/error404';

$route['Verify/(:any)'] = 'Verify/index/$1';
$route['About'] = 'Main/About';
$route['ForgottenPassword'] = 'UserPassword/showForgottenPasswordForm';
$route['ChangePassword/(:any)'] = 'UserPassword/showChangePasswordForm/$1';
$route['Event/Create'] = 'Event/create_event_form';
