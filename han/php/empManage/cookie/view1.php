<?php

	if(!empty($_COOKIE['lastVisit'])){
		echo "The last time you visit is ".$_COOKIE['lastVisit'];
		setcookie("lastVisit",date("Y-m-d H:i:s"), time()+24*3600*30);
	}else{
		echo "This is the first time you visit";
		setcookie("lastVisit",date("Y-m-d H:i:s"), time()+24*3600*30);
	}

?>