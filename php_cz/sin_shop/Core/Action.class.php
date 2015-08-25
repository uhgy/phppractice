<?php

	class Action{
		
		protected $view;
		
		public function __construct(){
			$this->view = new View();
		}

		protected function success($url,$msg,$time = 1){
			//include_once VIEW_DIR . '/redirect.html';
			$this->view->assign('msg',$msg);
			$this->view->assign('url',$url);
			$this->view->assign('time',$time);

			$this->view->display('redirect.html');
			exit;
		}

		protected function failure($url,$msg,$time = 2){
			//include_once VIEW_DIR . '/redirect.html';
			$this->view->assign('msg',$msg);
			$this->view->assign('url',$url);
			$this->view->assign('time',$time);

			$this->view->display('redirect.html');
			exit;
		}
	}