<?php 
ob_start(); echo "abc";
header("content-type:text/html;charset=utf-8");
echo "hello";		
ob_end_clean();
echo "aa";
header("content-type:text/html;charset=utf-8");
?>
