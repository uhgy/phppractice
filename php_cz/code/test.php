<?php

	function test1($url){
		echo $url;
		test2();
	}

	function test2(){
		echo $url;
	}


	$url = 'test';
	test1($url);
