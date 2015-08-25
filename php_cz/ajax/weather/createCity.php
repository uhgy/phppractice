<?php
mysql_connect ( 'localhost', 'root', 'root' );
mysql_select_db ( 'ajax' );
mysql_query ( 'set names utf8' );
$sql = "select code,name from weather order by id";
$result = mysql_query ( $sql );
$data = array ();
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$data [] = $row;
}
mysql_close ();
echo json_encode ( $data );