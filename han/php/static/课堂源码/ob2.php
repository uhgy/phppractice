<?php

	// 把程序缓存的数据，强制刷新到浏览器缓存.
	//flush();
	//str_repeat 重复的输出多次字符
	echo str_repeat(' ',1024);
	for($i=0;$i<5;$i++){
		echo $i;
		// 把程序缓存的数据，强制刷新到浏览器缓存.
		flush();
		//休眠1秒钟, 在sleep这个过程中,http连接没有断
		sleep(1);
	}