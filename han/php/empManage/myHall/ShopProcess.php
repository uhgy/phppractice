<?php



		if(isset($_GET['PHPSSESSID'])){
			session_id($_GET['PHPSSESSID']);
		}

		session_start();
		$sid=session_id();

		$bookid=$_GET['bookid'];
		$bookname=$_GET['bookname'];

		$_SESSION[$bookid]=$bookname;

		echo "<br/>购买商品成功";
		echo "<br/><a href='myHall.php?".SID."'>返回购物大厅继续购买</a>";


?>