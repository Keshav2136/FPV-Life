<?php
session_start();
error_reporting(E_ALL);
//error_reporting(E_ALL-E_NOTICE);
$include_filescheck=1;

define("DB_HOST","localhost");
 
define("DB_USERNAME","id15520675_guest");

define("DB_PASSWORD","Maestrocg@23");

define("DB_DATABASE","id15520675_users");
// mysql, mysqli
define('DB_DRIVER','mysqli');

define("TBL_PREFIX","");

define("DB_debugmode",false);

define('USR_SESSION','DYNC_USR');

// List of table names
$tables=array(
	'country'=>TBL_PREFIX.'country',
	'state'=>TBL_PREFIX.'state',
	'security'=>TBL_PREFIX.'security'
);


$httpsarray=array();
$httppath=(is_array($httpsarray) && count($httpsarray)>0 && in_array($filename,$httpsarray))?'https':'http';

define("SITE_PATH",$httppath.'/');

/** Absolute path to the host directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// Options [ php5, php5.5to7]
define("DEFINE_PHPMAILER_PHPVERSION","php5");

//Have to Change this constant for the latest version: securimage/v1/,securimage/v3.6/
define("SECURE_CAPTCHA_FOLDER","securimage/v3.6/");
define("SECURE_CAPTCHA_FIELD_NAME","cdynformelem_captcha");

define("ReCAPTCHA_CLASS_NAME","g-recaptcha");
define("ReCAPTCHA_FIELD_RESPONSE_NAME","g-recaptcha-response");
define('RECAPTCHAV2_SITE_KEY',""); 
define('RECAPTCHAV2_SECRET_KEY',"");

$UPLOAD['up']='uploads/';

class MysqlTables
{
var $tables=array();

	function __initMysqlTables()	{
		global $tables;
		$this->tables=$tables;
	}
	
}

?>