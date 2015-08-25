<?php
    require_once 'common.php';
    $id = $_POST['id'];
    $password = $_POST['password'];
    if(empty($_POST['keep'])){
        if(!empty($_COOKIE['id'])){
            setcookie("id",$id,time()-100);
        }
    }else{
        setcookie("id",$id,time()+7*2*24*3600);
    }



    $adminService = new AdminService();
    $name=$adminService->checkAdmin($id,$password);
    if($name!="") {
        session_start();
        $_SESSION['loginuser']=$name;
        header("Location: empManage.php?name=$name");
        exit();
    } else {
        header("Location:login.php?errno=1");
        exit();        
    }

?>
   
