<?php

	echo "<pre>";
	echo print_r($_GET);
	echo "</pre>";
	
	if(empty($_GET['city'])){
		echo "no receive";
	}else{
		echo "have city";
		echo $_GET['city'];
	}
	
	echo phpinfo();

?>