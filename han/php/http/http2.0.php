<title>http2.0</title>
<?php

  echo "your ip adress is:".$_SERVER['REMOTE_ADDR'];
  
  if($_SERVER['REMOTE_ADDR']=="192.168.1.107"){
    //jump to alert page
    header("Location: err.php");
  }
  
  //print_r($_SERVER);
  foreach($_SERVER as $key=>$val) {
    echo "$key=$val <br/>";
  }

?>

<img width="200px" src="1.jpg"/>
<img width="200px" src="2.jpg"/>