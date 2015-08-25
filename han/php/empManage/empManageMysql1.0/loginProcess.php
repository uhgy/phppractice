<?php
 
    $servername = "localhost";
    $id = $_POST['id'];
    $password = $_POST['password'];
    // Connecting, selecting database
    $conn=mysql_connect("localhost", "root", "root");
    if(!$conn) {
        die("connection failure".mysql_errno());
    }
    mysql_query("set names utf8",$conn) or die(mysql_errno());

    mysql_select_db("empmanage",$conn) or die(mysql_errno());

    $sql = "select password,name,id from admin where id=$id";

    $res = mysql_query($sql, $conn);

    if($row=mysql_fetch_assoc($res)) {
        if($row['password'] == md5($password)) {
            $name=$row['name'];
            header("Location: empManage.php?name=$name");
            exit();
        }
    }
    header("Location:login.php?errno=1");
    exit();    
    mysql_free_result($res);
    mysql_close($conn);