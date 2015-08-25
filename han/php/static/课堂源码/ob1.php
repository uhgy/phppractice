<?php

	//开启ob缓存
	ob_start();
	echo "hello100";
	header("content-type:text/html;charset=utf-8");
	echo "hello200";
	//ob_clean()清空ob中数据.
	//ob_clean();
	//该函数是清空ob中数据，并关闭ob缓存.
	//ob_clean();
	//把ob缓存的数据，刷新到程序缓存,同时关闭ob
	//ob_end_flush() ;
	//把ob缓存数据，刷新到程序远程，不关闭ob
	ob_flush();
	echo "hello300";
	//获取ob缓存的数据
	$str=ob_get_contents();
	//把$str保存到文件中.
	file_put_contents("d:/hsp.log",$str);

	echo "hello500";
	echo "hello600";