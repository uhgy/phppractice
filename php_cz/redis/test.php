<?php

	$redis = new Redis();

	$redis->connect("192.168.1.101");
	$redis->auth('guangzhou');

	$redis->set('name','likui');

?>