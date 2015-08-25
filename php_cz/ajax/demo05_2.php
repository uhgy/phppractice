<?php
$id = $_GET ['id'];

$sql = "delete from name where id='$id'";
mysql_connect ( 'localhost', 'root', 'root' );
mysql_select_db ( 'ajax' );
mysql_query ( 'set names utf8' );
$res = mysql_query ( $sql );
mysql_close();
if ($res) {
	echo 1;
} else {
	echo 0;
}