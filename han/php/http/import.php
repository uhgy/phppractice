<title>test1</title>
<?php
  
  if(isset($_SERVER['HTTP_REFERER'])){
    if(strpos($_SERVER['HTTP_REFERER'],"http://localhost:8080/http")==0) {
      echo "han's account information";
    }else{
      echo "thief";
    }
  }else{
    echo "no referer";
  }
    


?>