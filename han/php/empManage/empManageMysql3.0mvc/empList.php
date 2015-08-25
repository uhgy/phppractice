<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>EmpList</title>
<script type="text/javascript">
  function confirmDele(val){
    return window.confirm("if or not to delete the user whose id="+val);
  }
</script>
</head>
<?php

    require_once "common.php";
    checkUserValidate();      
    $empService=new EmpService();


    $fenyePage=new FenyePage();         
      //
    $fenyePage->pageNow=1;
    $fenyePage->pageSize=10;

      if(!empty($_GET['pageNow'])){
      	$fenyePage->pageNow=$_GET['pageNow'];
      }


      
      $empService->getFenyePage($fenyePage);

      echo "<table border='1' width='700px' bordercolor='green' cellspacing='0px'>";
      echo "<tr><th>ID</th><th>Name</th><th>Grade</th><th>Email</th><th>Salary</th>".
            "<th>Delete User</th><th>Modify User</th></tr>";       

      for($i=0;$i<count($fenyePage->res_array);$i++){
        $row=$fenyePage->res_array[$i];
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td>".
        "<td>{$row['grade']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>".
        "<td><a onclick='return confirmDele({$row['id']})' href='empProcess.php?flag=del&id={$row['id']}'>Delete</a></td>
         <td><a onclick='' href='UpdateEmpUI.php?id={$row['id']}'>Modify</a></td></tr>";
      }

      echo "<h1>EmpList</h1>";  
      echo "</table>";
    
      echo $fenyePage->navigator;
    
    echo "<br/><br/>";
?>
    <form action="empList.php">
    jump to:<input type="text" name="pageNow" />
    <input type="submit" value="Go">
    </form>
    <a href="empManage.php?">main</>

</html>


