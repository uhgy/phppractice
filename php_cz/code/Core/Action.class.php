<?php

	//模块（控制器）类的父类
	class Action{
		//增加一个视图类的属性
		protected $view;

		//增加构造方法
		public function __construct(){
			$this->view = new View();
		}
		
		//跳转方法：分为两个，一个是成功一个是失败
		protected function success($url,$msg,$time = 1){
			//分配数据
			$this->view->assign('url',$url);
			$this->view->assign('msg',$msg);
			$this->view->assign('time',$time);

			//加载模板，为模板解析数据
			$this->view->display('redirect.html');
			exit;
		}

		//失败跳转
		protected function failure($url,$msg,$time = 3){
			//加载失败跳转模板
			//分配数据
			$this->view->assign('msg',$msg);
			$this->view->assign('url',$url);
			$this->view->assign('time',$time);

			//加载模板，为模板解析数据
			$this->view->display('redirect.html');
			exit;
		}
	}