<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<?php
  require_once "common.php";
  checkUserValidate();
?>
<h1>add employees</h1>

<form action="empProcess.php" method="post">
	<table>
		<tr><td>name</td><td><input type="text" name="name"/></td></tr>
		<tr><td>grade</td><td><input type="text" name="grade"/></td></tr>
		<tr><td>email</td><td><input type="text" name="email"/></td></tr>
		<tr><td>salary</td><td><input type="text" name="salary"/></td></tr>
		<input type="hidden" name="flag" value="addemp" />
		<tr>
			<td><input type="submit" value="add users" /></td>
			<td><input type="reset" value="reset" ?></td>
		</tr>
	</table>
</form>
		<a href="empManage.php">main</a>


</html>