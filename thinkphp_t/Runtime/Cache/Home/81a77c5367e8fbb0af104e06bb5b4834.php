<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form method='post' action='__URL__/checkLogin'>
	用户： <input type='text' name='username' /><hr>
	密码： <input type='password' name='password' /><hr>
	<input type='submit' name='submit' value='登录' />
</form>

</body>
</html>