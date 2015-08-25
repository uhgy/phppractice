<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>EmpList</title>
</head>
<?php
    
    //database,postgresql
    //1.get the connection
    $conn=mysql_connect("localhost", "root", "root");
    if(!$conn) {
        die("connection failure".mysql_errno());
    }
    mysql_query("set names utf8");
    mysql_select_db("empmanage",$conn); 
            
      //
      $rowCount=0;//
      $pageSize=10;
      $pageNow=1;

      if(!empty($_GET['pageNow'])){
      	$pageNow=$_GET['pageNow'];
      }
      $pageCount=0;
      
      $sql="select count(id) from empmanage";
      
      $ret = mysql_query($sql);
      
      if (!$ret) {
        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        exit;
      }
      if($row=mysql_fetch_row($ret)) {
      	$rowCount=$row[0];
      }
      //¼ÆËã¹²ÓÐ¶àÉÙÒ³
      $pageCount=ceil($rowCount/$pageSize);
      $current=($pageNow-1)*$pageSize;
      $sql="select * from empmanage limit $pageSize offset $current";

      $res=mysql_query($sql);
      
      echo "<table border='1' width='700px' bordercolor='green' cellspacing='0px'>";
      echo "<tr><th>ID</th><th>Name</th><th>Grade</th><th>Email</th><th>Salary</th>".
            "<th>Delete User</th><th>Modify User</th></tr>"; 
      if (!$res) {
        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        exit;
      }     
      while($row=mysql_fetch_assoc($res)) {
          echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td>".
          "<td>{$row['grade']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>".
          "<td><a href='#'>Delete</a></td><td><a href='#'>Modify</a></td></tr>";
      }

      echo "<h1>EmpList</h1>";  
      echo "</table>";
      
      //´òÓ¡³öÒ³ÂëµÄ³¬Á´½Ó
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
    mysql_free_result($res);
    mysql_close($conn);?>
</html>


