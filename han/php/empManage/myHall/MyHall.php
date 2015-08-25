<?php

	if(isset($_GET['PHPSSESSID'])){
		session_id($_GET['PHPSSESSID']);
	}
	session_start();
	$sid=session_id();

	echo "<h1>welcome to buy</h1>";
	echo "<a href='ShopProcess.php?bookid=sn001
	&bookname=天龙八部&SID'>天龙八部</a><br/>";
	echo "<a href='ShopProcess.php?bookid=sn002&bookname=红楼梦&".SID."'>红楼梦</a><br/>";
	echo "<a href='ShopProcess.php?bookid=sn003&bookname=西游记&".SID."'>西游记</a><br/>";
	echo "<a href='ShopProcess.php?bookid=sn004&bookname=聊斋&".SID."'>聊斋</a><br/>";
	echo "<hr/>";
	echo "<a href='ShowCart.php?".SID."'>查看购买到的商品列表</a>";

?>