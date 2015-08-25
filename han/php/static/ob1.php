<?php

	ob_start();
	echo "hello";
	header("content-type:text/html;charset=utf-8");
	echo "hello200";
	echo "hello300";
	$str=ob_get_contents();
	file_put_contents("d:/hsp.log",$str);
	ob_end_clean();
	echo "hello500";
	echo "hello600";
	header("content-type:text/html;charset=utf-8");
?>