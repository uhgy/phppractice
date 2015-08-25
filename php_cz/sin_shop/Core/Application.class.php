<?php

	if(!defined('ACCESS'))exit;

	class Application{

		private static function setHeader(){
			header('Content-type:text/html;charset=utf-8');
		}

		private static function setConst(){
			define('ROOT_DIR',str_replace('/Core','',str_replace('\\','/',__DIR__)));
			//echo __DIR__ . '</br>';
			//echo ROOT_DIR;
			define('CORE_DIR',		ROOT_DIR . '/Core');
			define('ACTION_DIR',	ROOT_DIR . '/Action');
			define('CONF_DIR',		ROOT_DIR . '/Conf');
			define('MODEL_DIR',		ROOT_DIR . '/Model');
			define('VIEW_DIR',		ROOT_DIR . '/View');
			define('PUB_DIR',			ROOT_DIR . '/Publc');
		}

		private static function setErrors(){
			@ini_set("error_reporting", 1);
			@ini_set('display_errors', 1);
		}

		public static function loadAction($class){
			if(is_file(ACTION_DIR . "/$class.class.php")){
				include_once ACTION_DIR . "/$class.class.php";
			}
		}

		public static function loadCore($class){
			if(is_file(CORE_DIR . "/$class.class.php")){
				include_once CORE_DIR . "/$class.class.php";
			}
		}

		public static function loadModel($class){
			if(is_file(MODEL_DIR . "/$class.class.php")){
				include_once MODEL_DIR . "/$class.class.php";
			}
		}

		private static function setAutoload(){
			spl_autoload_register('Application::loadAction');
			spl_autoload_register(array('Application','loadCore'));
			spl_autoload_register('Application::loadModel');
		}

		private static function setSession(){
			@session_start();
		}

		private static function setConfig(){
			$GLOBALS['config'] = include_once CONF_DIR . '/config.php';
		}

		private static function setUrl(){
			$module = isset($_REQUEST['module']) ? $_REQUEST['module'] : 'privilege';
			$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';

			$module = strtolower($module);
			$action = strtolower($action);
			$module = ucfirst($module);
			
			define('MODULE', $module);
			define('ACTION', $action);
			

		} 

		private static function setPrivilege(){
			if(!(MODULE == 'Privilege' && (ACTION == 'login' || ACTION == 'signin' || ACTION == 'captcha'))){
				//var_dump($_REQUEST['module'].$_REQUEST['action'].$_SESSION['user']);exit;
				if(!isset($_SESSION['user'])){
					header('Location:index.php');
				}

			}

			// if(ACTION == 'captcha'){
			// 	alert('captcha');
			// }
		}

		private static function setDispatch(){
			$module = MODULE . 'Action';
			$module = new $module(); 
			$action = ACTION;
			$module->$action();
			//var_dump(MODULE.' '.ACTION);exit;
		}

		public static function run(){
			self::setHeader();
			self::setConst();
			self::setErrors();
			self::setAutoload();
			self::setSession();
			self::setConfig();
			self::setUrl();
			self::setPrivilege();
			self::setDispatch();
		}
	}