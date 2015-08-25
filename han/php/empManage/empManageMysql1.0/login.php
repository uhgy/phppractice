<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<h1>Admin login system</h1>
<form action="loginProcess.php" method="post">
<table>
<tr><td>UserID</td><td><input type="text" name="id"/></td></tr>
<tr><td>Password</td><td><input type="password" name="password"/></td></tr>
<tr>
<td><input type="submit" value="Login"/></td>
<td><input type="reset" value="Reset"/></td>
</tr>
</table>
</form>
<?php
    
    //get the errno
    if(!empty($_GET['errno'])){
        $errno=$_GET['errno'];
        if($errno==1){
            echo "<font color='red' size='3'>The username or password is invalid</font>";
        }
    }

?>


</html>
