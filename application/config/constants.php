<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

/*Site Settings for Community*/
define('COMMUNITY_CONDITION_ACTIVATED', false); //All Activation    false ->all will satisfy       -Mandatory

define('SITE_RELIGION', ''); // Optional
define('SITE_COMMUNITY', ''); // Optional
define('SITE_RELIGION_STATUS', false); // Only Religion             false->disable religion        -Mandatory
define('SITE_COMMUNITY_STATUS', false); // Only Caste / Community   false->disable community       -Mandatory
define('SITE_RELIGION_ID', '');   // -Mandatory
define('SITE_COMMUNITY_ID',''); // -Mandatory
define('WEBSITE_ID', 1);         // -Mandatory for database table users->base_site_id


define('PARENT_WEBSITE_FLAG', true);  //true-> For Making  App As Parent Website 
							  //Saves picture to upload folder itself, otherwise it goes to PARENT_WEBSITE_BASE_URL
define('PARENT_WEBSITE_BASE_URL',''); //if PARENT_WEBSITE_FLAG is http://pkeralamarry.com/ false, please specify PARENT_WEBSITE_BASE_URL



//SITE THEME SETTINGS
// define('SITE_THEME_URL','http://localhost/pknairuat/site_theme_assets/'); 

define('SITE_THEME','');
define('SITE_THEME_FOR_VIEW','');

