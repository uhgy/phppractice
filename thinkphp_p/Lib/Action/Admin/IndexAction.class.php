<?php
	class IndexAction extends Action {
		
		public function index(){
			if (!session ('?username')) {
				$this->redirect( 'Admin/login', array(), 2, '正在进入登录页面....');
			}
			$this->display( 'index' );	
		}
		public function top() {
			$this->display( 'top' );
		}
	}