<?php

	//后台权限控制页面
	//获取用户当前动作请求
	$act = isset($_POST['act']) ? $_POST['act'] : (isset($_GET['act']) ? $_GET['act'] : 'login');
	
	include_once 'includes/init.php';

	if($act == 'login'){
		include_once ADMIN_TEMP . '/login.html';
	}elseif($act == 'signin'){
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$captcha 	= isset($_POST['captcha']) ? $_POST['captcha'] : '';
	
		if(empty($captcha)){
			admin_redirect('privilege.php','必须填写验证码',3);
		}

		Captcha::checkCaptcha($captcha);

		if(empty($username)||empty($password)){
			admin_redirect('privilege.php','用户名和密码都不能为空',1);
		}
		if(!Captcha::checkCaptcha($captcha)){
			admin_redirect('privilege.php','验证码错误！',1);
		}

		//验证用户有效性
		$admin = new Admin();
		//var_dump($admin);
		if($user = $admin->checkByUsernameAndPassword($username,$password)){
			//file_put_contents('user.txt',serialize($user));
			//session_start();
			$_SESSION['user'] = $user;

			if(isset($_POST['remember'])){
				setcookie('user_id',$user['a_id'], time() + 7 * 3600 * 24);
			}

			$admin->updateLoginInfo($user['a_id']);

			//登录成功,进入系统首页
			admin_redirect("index.php",'登录成功', 1);
		}else{
			admin_redirect('privilege.php','用户名或者密码错误',1);
		}
	}elseif($act =='logout'){
		//清空session

		//销毁session
		//session_start();
		session_destroy();

		if(isset($_COOKIE['user_id'])){
			sercookie('user_id','',1);
		}

		admin_redirect('privilege.php?act=login','退出', 1);
	}elseif($act == 'captcha'){

		$captcha = new Captcha();
		header('Content-type:image/png');
		$captcha->generate();
	}



