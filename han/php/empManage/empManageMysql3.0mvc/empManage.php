<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<?php
  require_once "common.php";
  checkUserValidate();
  getLastTime();
	echo "Successfully ".$_GET['name']." Welcome!";
	echo "<br/><a href='login.php'>Return</a>";



?>
<h1>Main</h1>
<a href='empList.php'>Manage</a><br/>
<a href='addEmp.php'>Add</a><br/>
<a href='#'>Search</a><br/>
<a href='#'>Exit</a><br/>
</html>
