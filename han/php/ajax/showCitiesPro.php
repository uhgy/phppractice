<?php
  //tell browser the data returned is in xml format
  header("Content-Type: text/html;charset=utf-8");
  //tell browser not to save data
  header("Cache-Control; no-cache");

  //receive the province name
  
  $province=$_POST['province'];
  
  echo $province;   
?>