<?php
	
	echo "<br/>";
	session_start();
	$_SESSION['name']="shunping";
	$_SESSION['age']=100;
	$_SESSION['isBoy']=true;

	$arr1=array('北欧','小明',"hello");
	$_SESSION['arr1']=$arr1;

	require_once "Dog.class.php";

	$dog1=new Dog("big dog", 5, "a good dog");
	$_SESSION['dog1']=$dog1;
	echo "save ok";

	print_r($_SESSION);

?>