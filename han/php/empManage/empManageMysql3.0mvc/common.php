<?php
	function getLastTime(){
			if(!empty($_COOKIE['lastVisit'])){
			echo "The last time you visit is ".$_COOKIE['lastVisit']."<br/>";
			setcookie("lastVisit",date("Y-m-d H:i:s"), time()+24*3600*30);
		}else{
			echo "This is the first time you visit<br/>";
			setcookie("lastVisit",date("Y-m-d H:i:s"), time()+24*3600*30);
		}
	}

	function getCookieVal($key){
		if(empty($_COOKIE[$key])){
			return "";
		}else{
			return $_COOKIE[$key];
		}

	}

	function checkUserValidate(){
		session_start();
		if(empty($_SESSION['loginuser'])){
			header("Location: login.php");
		}

	}

	function __autoload($class){
		include_once "$class.class.php";
	}


?>