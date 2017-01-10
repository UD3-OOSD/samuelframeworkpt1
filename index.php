<?php
error_reporting(-1);
		ini_set('display_errors', 1);
		if(!isset($_SESSION)){
			session_start();
		}
        require 'vendor/autoload.php';

$system_path = 'system';
$application_folder = 'application';
$view_folder = 'application/views';

define('BASEPATH', $system_path.'/');
define('APPLICATION', $application_folder.'/');
define('VIEW', $view_folder.'/');
 


require BASEPATH.'samuelframework.php';