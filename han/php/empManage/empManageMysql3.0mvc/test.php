<?php

	require_once 'SqlHelper.class.php';

	$sqlHelper=new SqlHelper();
	$arr=$sqlHelper->execute_dql2("select * from empmanage limit 20");
	print_r($arr);

?>
