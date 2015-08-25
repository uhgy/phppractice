<?php

	//接收新闻id,传统的方法查询数据库并显示数据
	$id=intval($_GET['id']);
	//先判断该新闻对于的静态页面是否存在，如果有，则直接返回，如果
	//没有，则查询
	$html_file="news-id".$id.".html";
	//filemtime($html_file)+30>=time() 保证文件是30秒有效
	if(file_exists($html_file) && filemtime($html_file)+30>=time()){
		echo '静态页面';
		 echo file_get_contents($html_file);
		 exit;
	}
	//这里大家可以使用工具类完成.
	$con=mysql_connect("localhost","root","root");
	if(!$con){
		die("连接失败");
	}
	mysql_select_db("newssys",$con);
	$sql="select * from news where id=$id";
	$res=mysql_query($sql,$con);
	//显示新闻的内容.
	if($row=mysql_fetch_assoc($res)){
		ob_start();//启动ob缓存
		header("content-type:text/html;charset=utf-8");
			echo "<head><meta http-equiv='content-type' content='text/html;charset=utf-8'/></head>";
			echo "<table  border='1px' bordercolor='green' cellspacing='0' width=400px height=200px>";
			echo "<tr><td>新闻详细内容</td></tr>";
			echo "<tr><td>{$row['title']}</td></tr>";
			echo "<tr><td>{$row['content']}</td></tr>";
			echo "</table>";
		$ob_str=ob_get_contents();
		//把ob_str保存到一个静态文件页面.
		//取文件名有讲究 a. 唯一标识该新闻  b. 利用seo
		file_put_contents("news-id".$id.".html",$ob_str);

	}

