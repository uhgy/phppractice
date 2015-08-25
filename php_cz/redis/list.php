<?php
require 'redis.php';


$ids = $redis->lrange('id',0,-1);
$data = array();
foreach($ids as $v) {
	$data[] = $redis->hgetall("user:".$v);
}
//echo '<pre>';
//print_r($data);
//print_r($ids);
//$redis->hgetall('');

//echo 'ok';

?>

<html>
<head>
<script>
</script>
<style type="text/css"></style>
</head>
<body>
	<a href="add.php">register</a>
	<table width="500" border=1>		
	<tr>
		<td>编号</td>
		<td>姓名</td>
		<td>年龄</td>
		<td>操作</td>
	</tr>
	<?php foreach($data as $v) {?>
	<tr>
		<td><?php echo $v['uid'];?></td>
		<td><?php echo $v['username'];?></td>
		<td><?php echo $v['age'];?></td>
		<td>edit|delete</td>
	</tr>	
	<?php } ?>						
</body>
</html>


