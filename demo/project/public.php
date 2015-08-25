<?php

	//用于存放公告代码
	//字符集处理
	header('Content-type:text/html;charset=utf-8');

	/*
	 * 公共跳转函数
	 * @param1 string $url，需要跳转到哪个界面，默认为登录界面
	 * @param2 int $time，跳转等待时间，默认为3秒
	 * @param3 string $info，跳转提示信息，默认为失败
	 */
	 function redirect($url = 'login.html',$time = 3,$info = '失败'){
		//通过刷新界面实现
		header("Refresh:{$time};url={$url}");

		//给出提示信息
		echo $info;

		//终止脚本执行
		exit;
	 }

	 /*
	  * 自动加载函数 
	 */
	 function __autoload($class){
		//直接加载
		include_once "$class.class.php";
	 }

	

	