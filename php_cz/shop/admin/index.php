<?php	
	//echo '后台首页';
	$act = isset($_GET['act']) ? $_GET['act'] : 'index';
	
	include_once 'includes/init.php';
	//session_start();



	if($act == 'index'){

		include_once ADMIN_TEMP . '/index.html';
	}elseif($act == 'top'){
		//$user = unserialize(file_get_contents('user.txt'));
		//session_start(); 

		include_once ADMIN_TEMP . '/top.html';
	}elseif($act == 'menu'){
		include_once ADMIN_TEMP . '/menu.html';
	}elseif($act == 'drag'){
		include_once ADMIN_TEMP . '/drag.html';
	}elseif($act == 'main'){
		include_once ADMIN_TEMP . '/main.html';
	}





