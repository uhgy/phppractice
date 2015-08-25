<?php

	//处理用户的添加/更新/删除...请求
	//先获取 oper值
	$oper=$_POST['oper'];
	if($oper==='add'){
		//接收用户的新闻的各个信息
		$title=$_POST['title'];
		$content=$_POST['content'];
		//把新闻添加到数据库
		//这里大家可以使用工具类完成.
		$con=mysql_connect("localhost","root","root");
		if(!$con){
			die("连接失败");
		}
		mysql_select_db("newssys",$con);
		$sql="insert into news values(null,'$title','$content','')";
		//echo $sql;
		if(mysql_query($sql,$con)){
			//生成静态文件.
			$id=mysql_insert_id();
			$html_filename='news-id'.$id.'.html';
			//取出当前的年月日创建一个文件夹，把这个静态页面放入这个文件夹中.
			$html_fp=fopen("../".$html_filename,'w');
			
			//把模板文件读取.
			$fp=fopen('news.tpl','r');
			//循环读取
			//如果没有读到文件的最后,就一直读取
			while(!feof($fp)){
				//一行行读.
				$row=fgets($fp);
				//把占位符替换掉->小函数 myreplace
				//问题?
				$row=str_replace('%title%',$title,$row);
				$row=str_replace('%content%',$content,$row);
				fwrite($html_fp,$row);
			}
			//关闭文件
			fclose($html_fp);
			fclose($fp);
			echo "恭喜你，添加成功<a href='manage.html'>管理新闻</a>";
			//怎样让首页面立即更新.
			include "newsList.php";

		}else{
			die('添加失败');
		}
	}else if($oper==='update'){
	
	}else if($oper==='delete'){
	
	}

