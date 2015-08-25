<?php

	//权限模块
	class PrivilegeAction extends Action{
		
		//方法：名字与action的值一致
		public function login(){
			include_once VIEW_DIR . '/' . MODULE . '/login.html';

			//加载模板应该交由视图类的对象来处理
			//$this->view->display('login.html');
		}

		//登录验证
		public function signin(){
			//假设经过验证
			//接收数据
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			$captcha  = isset($_POST['captcha'])  ? $_POST['captcha']  : '';

			//合法性验证
			if(empty($captcha)){
				$this->failure('index.php','验证码不能为空！');
			}
			if(empty($username) || empty($password)){
				$this->failure('index.php','用户名或者密码都不能为空！');
			}

			//有效性验证
			if(!Captcha::checkCaptcha($captcha)){
				$this->failure('index.php','验证码错误！');
			}
		
			//验证用户信息（操作数据库：模型）
			$admin = new AdminModel();
	
			if($user = $admin->checkByUsernameAndPassword($username,$password))
			{		
			
				//成功
				$_SESSION['user'] = $user;

				//更新用户信息
				$admin->updateLoginInfo($user['a_id']);

				//跳转到首页
				$this->success('index.php?module=index&action=index','登录成功，正在跳转！');
			}else{
				//失败
				$this->failure('index.php','用户名或者密码不正确！');
			}

		}

		//获取验证码方法
		public function captcha(){
			//获取验证码
			$captcha = new Captcha();
			//修改响应头
			header('Content-type:image/png');
			$captcha->generate();
		}
	}