<?php
mysql_connect ( 'localhost', 'root', 'root' );
mysql_select_db ( 'ajax' );
mysql_query ( 'set names utf8' );
$sql = "select * from name order by id desc";
$result = mysql_query ( $sql );
// 获取总行数
$num = mysql_num_rows ( $result );
// 定义数组
$data = array ();
// 解析结果集
for($i = 0; $i < $num; $i ++) {
	// 获取一条数据
	$row = mysql_fetch_assoc ( $result );
	// 将一维数组放在另一个数组元素中，所以data是二维数组
	$data [] = $row;
}
// 对二维数组进行json编码
echo json_encode ( $data );
