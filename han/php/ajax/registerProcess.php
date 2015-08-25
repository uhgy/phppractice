<?php 

  //tell browser the data returned is in xml format
  header("Content-Type: text/html;charset=utf-8");
  //tell browser not to save data
  header("Cache-Control; no-cache");
  //receive data
  $username=$_POST['username'];
  
  //echo $username;
  //
  $info="";
  if($username=="shunping")
  {
    //echo "username can't be used";//line3
    //$info.="<res><mes>sorry, username can't be used</mes></res>";  
    $info='[{"res":"this user can not be used","id":"a001","date":"2015-1-3"},{"res":"this user can not be used","id":"a003","date":"2015-1-3"}]';
  }else{
    //$info.="<res><mes>congratulations, username can be used</mes></res>";
    $info='[{"res":"this user can be used","id":"a002","date":"2015-1-7"},{"res":"this user can not be used","id":"a004","date":"2015-1-3"}]';
  }
  echo $info;


?>