<?php

	$con=mysql_connect("localhost","root","root");

	if(!$con){
		die("connect failure");
	}
		mysql_select_db("newssys",$con);
		mysql_set_charset('utf8', $con);
		$sql="select * from news";

		$res=mysql_query($sql,$con);
		ob_start();
		echo 	"<head><meta http-equiv='content-type' content='text/html;charset=utf-8'/></head>";
		echo "<h1>News List</h1>";
		echo "<table>";
		echo "<tr><td>id</td><td>HeadLine</td><td>Details</td><td>Edit News</td></tr>";
		while($row=mysql_fetch_assoc($res)){
			echo '<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td>
			<td><a href="news-id'.$row['id'].'.html">Details</a></td>
			<td><a href="#">修改页面</a></td></tr>';
			
		}
		echo "</table>";
		$str_ob=ob_get_contents();
		file_put_contents("../index.html",$str_ob);
		ob_clean();
		echo "congratulations, the main page fresh successful<a href='manage.html'>
		click to check the newest news list</a>";
		mysql_free_result($res);
		mysql_close($con);
	

?>
