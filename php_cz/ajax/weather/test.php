<?php
mysql_connect ( 'localhost', 'root', 'root' );
mysql_select_db ( 'ajax' );
mysql_query ( 'set names utf8' );

$data = file ( 'data.txt' );
$count = count ( $data );
for($i = 0; $i < $count; $i ++) {
	$row = explode ( '=', $data [$i] );
	$code = $row [0];
	$name = $row [1];
	
	$sql = "insert into weather values(null,'$code','$name')";
	mysql_query ( $sql );
}
echo 'ok';