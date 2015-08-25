<?php
	echo "<h1>购物车商品有</h1>";

	if(isset($_GET['PHPSSESSID'])){
		session_id($_GET['PHPSSESSID']);
	}
	session_start();
	$sid=session_id();
	foreach($_SESSION as $key=>$val){
		echo "<br/> 书号--$key 书名--$val";
	}
	echo "<br/><a href='MyHall.php?".SID."'>回到购买页面</a>";

?>