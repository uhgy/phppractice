<?php
	require "redis.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$age = $_POST['age'];
	$uid = $redis->incr("uid");
	//echo $uid;

	$a = $redis->hmset("user:".$uid,array('uid'=>$uid,'username'=>$username,'password'=>$password,'age'=>$age));

	$redis->rpush('id',$uid);
	if($a){
		header("location:list.php");
	}
