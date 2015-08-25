<?php
	//列出新闻列表
	//这里，我使用最简单的方法来操作，没有使用mvc模式
	//这里你们可以使用工具类完成. db.class.php
	$con=mysql_connect("localhost","root","root");
	if(!$con){
		die("连接失败");
	}
	mysql_select_db("newssys",$con);
	$sql="select * from news";
	$res=mysql_query($sql,$con);
		ob_start();
		echo "<head><meta http-equiv='content-type' content='text/html;charset=utf-8' /></head>";
		echo "<h1>新闻列表</h1>";
		echo "<table>";
		echo "<tr><td>id</td><td>标题</td><td>查看详情</td><td>修改新闻</td></tr>";
		//循环的取出新闻列表
		while($row=mysql_fetch_assoc($res)){
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td><a href="news-id'.$row['id'].'.html">查看详情</a></td><td><a href="#">修改页面</a></td></tr>';
		}
		echo "</table>";
		$str_ob=ob_get_contents();
		file_put_contents('../index.html',$str_ob);
		//这里关闭资源.
		//清空ob
		ob_clean();
		echo "恭喜你，首页面更新成功<a href='../index.html'>点击查看最新新闻列表</a>";

		mysql_free_result($res);
		mysql_close($con);