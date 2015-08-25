<?php


	//跳转函数
	/*
	 * 跳转函数
	 * @param1 string $url, 要跳转的目标对象
	 * @param2 string $msg, 提示信息
	 * @param3 int $time, 跳转等待时间
	*/
	function admin_redirect($url = 'privilege.php', $msg = '请先登录',$time = 2){
		include_once ADMIN_TEMP . '/redirect.html';
		exit;
	}


	/*
	 * 自动加载类
	 *
	*/
	function __autoload($class){
		if(is_file(HOME_INC . "/$class.class.php")){
			include_once HOME_INC. "/$class.class.php";
		}elseif(is_file(ADMIN_INC . "/$class.class.php")){
			include_once ADMIN_INC . "/$class.class.php";
		}
	}