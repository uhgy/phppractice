<?php
	require_once "Dog.class.php";

	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	if(!empty($_SESSION['name'])){
		echo "<br/>name is:".$_SESSION['name'];
	}
	
	if(!empty($_SESSION['arr1'])){
		$arr1=$_SESSION['arr1'];
		echo "<br/>";
		foreach($arr1 as $key=>$val){
			echo "<br/>--$val";
		}
	}
	



	if(!empty($_SESSION['dog1'])){
		$xiaogou=$_SESSION['dog1'];
		echo "<br/>The name of the dog:".$xiaogou->getName();
	}

?>