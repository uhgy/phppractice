<?php 
ob_start(); 
echo "abc";
header("content-type:text/html;charset=utf-8");
echo "hello";		
ob_end_flush();
echo "aa";
echo ob_get_contents();
?>
