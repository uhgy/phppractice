<?php

	//判断常量是否定义，如果没有定义，意味着不是请求的index.php
	if(!defined('ACCESS'))exit;

	//初始化类
	class Application{
		//1.	初始化字符集
		private static function setHeader(){
			header('Content-type:text/html;charset=utf-8');
		}

		//2.	初始化系统常量
		private static function setConst(){
			//设置根目录常量
			define('ROOT_DIR',str_replace('/Core','',str_replace('\\','/',__DIR__)));
			//定义其他目录
			define('CORE_DIR',		ROOT_DIR . '/Core');
			define('ACTION_DIR',	ROOT_DIR . '/Action');
			define('CONF_DIR',		ROOT_DIR . '/Conf');
			define('MODEL_DIR',		ROOT_DIR . '/Model');
			define('VIEW_DIR',		ROOT_DIR . '/View');
			define('PUB_DIR',		ROOT_DIR . '/Public');
		}

		//3.	错误信息
		private static function setErrors(){
			//开发环境下，显示错误，显示所有级别的错误
			//生产环境下，不显示错误，隐藏所有的级别的错误（系统要做好容错处理）
			@ini_set('error_reporting', 1);
			@ini_set('display_errors', 1);
		}

		//4.	自动加载
		//4.1	加载控制器类
		public static function loadAction($class){
			//判断
			if(is_file(ACTION_DIR . "/$class.class.php")){
				include_once ACTION_DIR . "/$class.class.php";
			}
		}

		//4.2	加载核心类
		public static function loadCore($class){
			//判断
			if(is_file(CORE_DIR . "/$class.class.php")){
				include_once CORE_DIR . "/$class.class.php";
			}
		}

		//4.3	加载模型类
		public static function loadModel($class){
			//判断
			if(is_file(MODEL_DIR . "/$class.class.php")){
				include_once MODEL_DIR . "/$class.class.php";
			}
		}

		//将所有的自动加载方法注册到自动加载机制中
		private static function setAutoload(){
			spl_autoload_register(array('Application','loadCore'));
			spl_autoload_register(array('Application','loadAction'));
			//系统会判断当前提供的参数是一个函数（字符串）还是一个数组
			//如果是一个数组：1.找到数组的第一个参数，判断该参数，如果参数不是一个对象，系统会认为该字符串是一个类名，所以在拼凑访问的时候，会用范围解析操作符去访问第二个参数
			//Application::loadCore();
			spl_autoload_register(array('Application','loadModel'));
		}

		//5.	开启session机制
		private static function setSession(){
			//开启session
			@session_start();
		}

		//6.	加载配置文件
		private static function setConfig(){
			$GLOBALS['config'] = include_once CONF_DIR . '/config.php';
		}

		//7.	URL初始化
		private static function setUrl(){
			//获取用户的url信息（GET方式提交的数据）
			//module：请求的模块（控制器）
			$module = isset($_REQUEST['module']) ? $_REQUEST['module'] : 'privilege';
			//action：请求的方法
			$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';

			//处理字符串
			//1.	全部转小写
			$module = strtolower($module);
			$action = strtolower($action);

			//2.	类的首字母大写，方法不需要
			$module = ucfirst($module);

			
			//将获取到的数据定义成常量
			define('MODULE',$module);
			define('ACTION',$action);
		}

		//8.	权限验证
		private static function setPrivilege(){
			//放行一些不需要验证的控制器的方法
			if(!(MODULE == 'Privilege' && (ACTION == 'login' || ACTION == 'signin' || ACTION == 'captcha'))){
				var_dump($_REQUEST['module'].$_REQUEST['action'].$_SESSION['user']);exit;
				//都是需要验证
				if(!isset($_SESSION['user'])){
					//用户没有登录
					header('Location:index.php');
				}
			}
		}

		//9.	分发
		private static function setDispatch(){
			//找对对应的控制器类，实例化，再调用对应的方法即可
			$module = MODULE . 'Action';			//得到控制器名字
			$module = new $module();				//创建控制器对象
			$action = ACTION;
			$module->$action();						//调用控制器中的方法
		}


		//初始化方法
		public static function run(){
			//初始化项目
			//1.初始化字符集
			self::setHeader();
			//2.初始化系统常量
			self::setConst();
			//3.错误信息
			self::setErrors();
			//4.自动加载
			self::setAutoload();
			//5.session开启
			self::setSession();
			//6.配置文件
			self::setConfig();
			//7.URL初始化
			self::setUrl();
			//8.权限验证
			self::setPrivilege();
			//9.分发
			self::setDispatch();
		}
	}