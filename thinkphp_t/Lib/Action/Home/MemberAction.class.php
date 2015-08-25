<?php
class MemberAction extends Action {
	public function login() {
		$this->display ( 'login' );
	}
	
	public function checkLogin() {
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username == 'zhangsan' && $password == '123456') {
			$this->success('登录成功', 'test');	
		}else{
			$this->error('登录失败', 'login');
		}
	}
	
	public function test() {
		echo '主页';
		$this->redirect( 'test2', array (
				'id' => 10,
				'age' => 30
		), 2, '页面跳转中');
	}
	
	public function test2() {
		echo 'test2方法';
	}
}