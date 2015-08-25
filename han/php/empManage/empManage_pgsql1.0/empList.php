<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>EmpList</title>
</head>
<?php


    $host        = "host=127.0.0.1";
    $port        = "port=5432";
    $dbname      = "dbname=empmanage";
    $credentials = "user=uhgy password=uhgy";
    
    //database,postgresql
    //1.get the connection
    $db = pg_connect( "$host $port $dbname $credentials"  );    
            
      //
      $rowCount=0;//
      $pageSize=10;
      $pageNow=1;

      if(!empty($_GET['pageNow'])){
      	$pageNow=$_GET['pageNow'];
      }
      $pageCount=0;
      
      $sql=<<<EOF
      select count(id) from emp;
EOF;
      
      $ret = pg_query($db, $sql);
      //取出行数
      if(($row=pg_fetch_row($ret)) != false){
      	$rowCount=$row[0];
      }
      //计算共有多少页
      $pageCount=ceil($rowCount/$pageSize);
      
      $sql=<<<EOF
        select * from emp limit $pageSize offset ($pageNow-1)*$pageSize;
EOF;
      $res=pg_query($db, $sql);
      
      echo "<table border='1' width='700px' bordercolor='green' cellspacing='0px'>";
      echo "<tr><th>ID</th><th>Name</th><th>Grade</th><th>Email</th><th>Salary</th>".
            "<th>Delete User</th><th>Modify User</th></tr>"; 
      while(($row=pg_fetch_assoc($res)) != false){
          echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td>".
          "<td>{$row['grade']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>".
          "<td><a href='#'>Delete</a></td><td><a href='#'>Modify</a></td></tr>";
      }

      echo "<h1>EmpList</h1>";  
      echo "</table>";
      
      //打印出页码的超链接
//        for($i=1;$i<=$pageCount;$i++){
//       	echo "<a href = 'empList.php?pageNow=$i'>$i</a>&nbsp;";
//       } 
    if ($pageNow > 1){
        $prePage=$pageNow-1;
        echo "<a href='empList.php?pageNow=$prePage'>prePage</a>&nbsp;";
    }
    if ($pageNow <$pageCount){
        $nextPage=$pageNow+1;
        echo "<a href='empList.php?pageNow=$nextPage'>nextPage</a>&nbsp;";
    }  
    
    echo " pageNow {$pageNow} / total {$pageCount}";
    
    echo "<br/><br/>";
    ?>
    <form action="empList.php">
    jump to:<input type="text" name="pageNow" />
    <input type="submit" value="Go">
    </form>
    
    <?php 
    
    
      pg_close($db);
?>
</html>


