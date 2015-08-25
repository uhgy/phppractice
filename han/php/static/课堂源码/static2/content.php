<?php

/*$regex = '/
	^host=(?<!\.)([\d.]+)(?!\.)                 (?#主机地址)
	\|
	([\w!@#$%^&*()_+\-]+)                       (?#用户名)
	\|
	([\w!@#$%^&*()_+\-]+)                       (?#密码)
	(?!\|)$/ix';
	
	$str = 'host=192.168.10.221|root|123456';

	if(preg_match($regex,$str,$res)==1){
		echo "yes";
		echo "<pre>";
		print_r($res);
		echo "</pre>";
	}*/

	$path_info=$_SERVER['PATH_INFO'];
	$reg='/(\d+),(\d+),(\d+)\.html$/i';

	preg_match($reg,$path_info,$res);

	echo "<pre>";
	print_r($res);
	echo "</pre>";



	

	

