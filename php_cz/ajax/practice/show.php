<?php
$username = $_POST['username'];
$password = $_POST['password'];

mysql_connect ( 'localhost', $username, $password );
mysql_select_db ( 'ajax' );
mysql_query ( 'set names utf8' );
$sql = "select * from name order by id desc";
$result = mysql_query ( $sql );
$num = mysql_num_rows ( $result );
$data = array ();

for($i = 0; $i < $num; $i ++) {
	$row = mysql_fetch_assoc ( $result );

	$data [] = $row;
}

echo json_encode( $data );