<?php

    //receive user information
    //id
    $id=$_POST['id'];
    //password
    $password=$_POST['password']; 
    
    $host        = "host=127.0.0.1";
    $port        = "port=5432";
    $dbname      = "dbname=empmanage";
    $credentials = "user=uhgy password=uhgy";        
    
    //database,postgresql
    //1.get the connection
    $db = pg_connect( "$host $port $dbname $credentials"  );
    if(!$db){
        echo "Error : Unable to open database\n";
    } else {
        echo "Opened database successfully\n";
    }
    //
    //choose database
    //mysql_select_db("empmanage",$conn) or die(mysql_errno());
   
    $sql =<<<EOF
        select password,name from admin where id = {$id};
EOF;
    
    $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }

   
    if(($row = pg_fetch_row($ret)) != false){
        if($row[0]==md5($password)){
            $name = $row[1];
            header("Location:empManage.php?name=$name");
            exit();
        }
        header("Location: login.php?errno=2");
        exit();
    }
    
    
    
    
    
    //close
    pg_close($db);   
     
    
  /* //simple verify
    if($id=="100"&&$password=="123"){
        header("Location: empMain.php");
        exit();
    }else{
        //
        header("Location:login.php?errno=1");
        exit();
    }   */

?>