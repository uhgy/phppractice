<?php

	//工厂单例模式：产生对象
	class Factory{
		//工厂模式不需要创建自己类的对象，因此方法都是静态
		//三私一公
		private static $obj = array();

		private function __construct(){}
		private function __clone(){}

		//获取对象方法
		//@param1 string $class，需要创建对象的类名
		//@return object，返回的是类的对象，失败返回FALSE
		Public static function getInstance($class){
			//加载类
			self::setAutoload();

			//创建对象
			//判断类对象是否存在
			if(!isset(self::$obj[$class])){
				//对象不存在
				self::$obj[$class] = new $class;
			}

			//返回
			return self::$obj[$class];
		}

		//4.	自动加载
		//4.1	加载控制器类
		public static function loadAction($class){
			//判断
			if(is_file("../20140913/Action/$class.class.php")){
				include_once "../20140913/Action/$class.class.php";
			}
		}

		//4.2	加载核心类
		public static function loadCore($class){
			//判断
			if(is_file("../20140913/Core/$class.class.php")){
				include_once "../20140913/Core/$class.class.php";
			}
		}

		//4.3	加载模型类
		public static function loadModel($class){
			//判断
			if(is_file("../20140913/Model/$class.class.php")){
				include_once "../20140913/Model/$class.class.php";
			}
		}

		//将所有的自动加载方法注册到自动加载机制中
		private static function setAutoload(){
			spl_autoload_register(array('Factory','loadCore'));
			spl_autoload_register(array('Factory','loadAction'));
			//系统会判断当前提供的参数是一个函数（字符串）还是一个数组
			//如果是一个数组：1.找到数组的第一个参数，判断该参数，如果参数不是一个对象，系统会认为该字符串是一个类名，所以在拼凑访问的时候，会用范围解析操作符去访问第二个参数
			//Application::loadCore();
			spl_autoload_register(array('Factory','loadModel'));
		}
	}

	echo '<pre>';
	echo '<pre>';
	$first = Factory::getInstance('Captcha');
	var_dump($first);
	$second = Factory::getInstance('Captcha');
	var_dump($second);