<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "auth/register";
$route['404_override'] = '';

$route['account_setting'] = 'update_profile/account_setting/';
$route['account_update'] = 'update_profile/setting_update/';
$route['send_message'] = 'message/send_message/';

$route['privacypolicy'] = 'welcome/privacypolicy';
$route['terms-conditions'] = 'welcome/terms_conditions';


$route['send'] = 'message/send_message_inbox/';
$route['send/(:num)'] = 'message/send_message_inbox/$i';
$route['inbox'] = 'message/inbox/';
$route['inbox/(:num)'] = 'message/inbox/$i';
$route['sample/([0-9]+)'] = 'sample/index/$1';
$route['users/([0-9]+)']='forme/get_user/$1';
$route['fulluserdetail/([0-9]+)']= 'admin/userdetail/$1';
$route['muser/([0-9]+)']='muser/index/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */