<?php
	
	class PrivilegeAction extends Action{

		public function login(){
			//include_once VIEW_DIR . '/' . MODULE . '/login.html';
			$this->view->display('login.html');
		}

		public function signin(){
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';

			if(empty($captcha)){
				$this->failure('index.php','验证码不能为空');
			}

			if(empty($username)){
				$this->failure('index.php','用户名或者密码都不能为空');
			}

		
			if(Captcha::checkCaptcha($captcha)){
				$this->failure('index.php','验证码错误');
			}

			$admin = new AdminModel();
			if($user = $admin->checkByUsernameAndPassword($username,$password)){
				$_SESSION['user'] = $user;

				$admin->updateLoginInfo($user['a_id']);

				$this->success('index.php?module=index&action=index','登录成功');
			}else{
				$this->failure('index.php','验证码错误');
			}

		}

		public function captcha(){
			$captcha = new Captcha();

			header('Content-type:image/png');
			$captcha->generate();
		}

	}
