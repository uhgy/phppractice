<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel='stylesheet' href='__CSS__/index.css' />
</head>
<body>
商品名：<input type='text'/>
<hr>

	商品： <?php echo ($goodsName); ?>
	<hr>
	价格： <?php echo ($goodsPrice); ?>
	<hr>
	产地： <?php echo ($goodsAddress); ?>
	<hr>
	__PUBLIC__<hr>

	__APP__<hr>
	__GROUP__<hr>
	__URL__<hr>
	__ACTION__<hr>
	__CSS__
</body>
</html>