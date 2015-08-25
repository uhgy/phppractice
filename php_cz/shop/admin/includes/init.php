<?php

	header('Content-type:text/html;charset=utf-8');
	//定义目录常量
	//系统根目录
	define('HOME_ROOT',str_replace('\\','/',substr(__DIR__,0,strpos(__DIR__,'\admin\includes'))));
	//前台公共目录
	define('HOME_INC',		HOME_ROOT . '/includes');
	define('HOME_CONF', 	HOME_ROOT . '/conf');
	//后台根目录
	define('ADMIN_ROOT',	HOME_ROOT . '/admin');
	define('ADMIN_INC',		ADMIN_ROOT . '/includes');
	define('ADMIN_TEMP',	ADMIN_ROOT . '/templates');

		//定义系统错误设置
	@ini_set('error_reporting', E_ALL ^ E_DEPRECATED);
	@ini_set('display_errors', 1);

	//加载公共函数
	include_once ADMIN_INC . '/functions.php';
	//加载配置文件
	$config = include_once HOME_CONF . '/config.php';

	$session = new Session();

	//@session_start();


	$script_name = basename($_SERVER['SCRIPT_NAME']);

		if($script_name == 'privilege.php' && ($act == 'login' || $act == 'captcha' || $act == 'signin')){
			//echo("<script>console.log($act)</script>");
		}else{
			if(!isset($_SESSION['user'])){
				if(isset($_COOKIE['user_id'])){
					//有cookie
					$admin = new Admin();

					if($user = $admin->getUserInfoById($_COOKIE['user_id'])){
						$_SESSION['user'] = $user;
						$admin->updateLoginInfo($user['a_id']);

					}else{
						admin_redirect('privilege.php','保存的用户信息已经失效，请重新登录！',2);
					}
				}else{
					//没有session和cookie，没有登录
					admin_redirect('privilege.php','请先登录', 2);
				}
			}
		}
