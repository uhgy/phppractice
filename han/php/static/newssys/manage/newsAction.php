<?php

	$oper=$_POST['oper'];

	if($oper==='add'){

		$title=$_POST['title'];
		$content=$_POST['content'];

		$con=mysql_connect("localhost","root","root");
		if(!$con){
			die("connection failure");
		}
		mysql_select_db("newssys",$con);
		$sql="insert into news values(null,'$title','$content','')";
		if(mysql_query($sql,$con)){
			$id=mysql_insert_id();
			$html_filename='news-id'.$id.'.html';
			$html_fp=fopen('../'.$html_filename,'w');
			$fp=fopen('news.tpl','r');
			echo $title;
			//not end of file
			while(!feof($fp)){
				//read by line
				$row=fgets($fp);
				//replace %**% by 
				$row=str_replace("%title%",$title,$row);
				$row=str_replace("%content%",$content,$row);
				fwrite($html_fp,$row);
			}
			fclose($html_fp);
			fclose($fp);
			echo "congratulations, add success<a href='manage.html'>manage news</a>";
			include "newsList.php";
		}else{
			die('add failure');
		}
	}else if($oper==='update'){

	}else if($oper==='delete'){
		
	}

?>