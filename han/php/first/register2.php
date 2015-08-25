<?php

	echo "<pre>";
	echo print_r($_POST);
	echo "</pre>";
	
	
	$name=$_POST['username'];
	$pwd=$_POST['password'];
	$hobbies=$_POST['hobby'];

	echo "personal information<br/>";
	echo "$name--$pwd";
	print_r($hobbies);
	echo "hobbies include";
	
	foreach($hobbies as $key=>$val){
		echo "<br/>$key=$val";
	}	
	
	echo "<br/>where are you from<br/>";
	$city=$_POST['city'];
	
	echo $city;
	

	
	echo "<br/>personal introduction including";
	$intro=$_POST['intro'];
	echo "<br/>$intro";
	$photo=$_POST['myphoto'];
	echo "<br/>$myphoto";
	
?>
	