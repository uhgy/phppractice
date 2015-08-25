<?php

	class IndexAction extends Action{

		public function index(){
			$this->view->display('index.html');
		}
		public function top(){
			$this->view->assign('name',$_SESSION['user']['a_username']);
			$this->view->assign('time',
				date('Y-m-d H:i:s',$_SESSION['user']['a_last_log_time']));
			$this->view->display('top.html');
		}
		public function drag(){
			$this->view->display('drag.html');
		}
		public function menu(){
			$this->view->display('menu.html');
		}
		public function main(){
			$this->view->display('main.html');
		}
	}


?>