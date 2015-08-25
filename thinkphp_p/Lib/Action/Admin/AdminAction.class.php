<?php


class AdminAction extends Action {

	
	public function login() {
// 		test1();
// 		load('@.user');
// 		test2();

// 		import('@.Common.Cart');
// 		$cart = new Cart();
// 		var_dump ($cart);
// 		D('Admin')->select();
		$this->display( 'login' );
	}
	
	public function checkLogin() {
		
 		$code = $_POST['code'];
// 		echo $code.'<hr>';
// 		echo session('verify');

		if(session('verify')!=md5($code)) {
			$this->error('验证码不正确','login');
			exit();
		}
		

		if(isset($_POST['btnOk'])) {
			$username = $_POST ['username'];
			$password = $_POST ['password'];
			$count = D('Admin')->where("username='$username' and password='$password'")->count();
			if($count>0) {
				session('username', $username);
				$this->redirect('Index/index',array(),1,'系统登录中');
			}else{
				$this->error('登录失败', 'login');
			}
		}
	}
	
	public function createCode() {
		import('ORG.Util.Image');
		Image::buildImageVerify(6);
	}
	
	public function uploadFile() {
		//import ('ORG')
	}
	
	
}