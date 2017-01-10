<?php
/**
 * samuelframework Version
 *
 * @var	string
 *
 */

	define('SF_VERSION', '1.0.0');
	$GLOBALS['base_url']='';


	function base_url(){
		
		if(empty($GLOBALS['base_url'])){
			return $_SERVER['HTTP_HOST'].'/';
		}else{
			return $_SERVER['HTTP_HOST'].'/'.$GLOBALS['base_url'].'/';
		}
		
	}

	function base_url_super(){
		
		
		return "http://".base_url();
		
		
	}

	function config($filename){

 	return (object) require_once("./".APPLICATION.'config/'.$filename.'.php');
	}

	require_once  BASEPATH.'controllers/controller.php';
	
