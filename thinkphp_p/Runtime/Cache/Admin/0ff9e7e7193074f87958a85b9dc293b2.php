<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<!-- html comment -->

<hr>
<?php echo ($name); ?>
<hr>
<?php echo ($person["name"]); ?> ， <?php echo ($person["age"]); ?>
<hr>
<?php echo ($obj->email); ?>
</body>
</html>