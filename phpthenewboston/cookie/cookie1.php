<?php


	setCookie("name","shunping",time()+1000);
	foreach($_COOKIE as $key=>$val){
		setcookie($key, "", time()-10);
	}
	echo "save success";

?>