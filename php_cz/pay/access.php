<?php
header("content-type:text/html;charset=utf-8");
//print_r($_POST);
//接收第三方支付平台发送的数据
require 'init.php';

$v_oid=$_POST['v_oid'];//返回的订单号
$v_pstatus=$_POST['v_pstatus'];//返回的支付状态
$v_amount=$_POST['v_amount'];//返回的金额
$v_moneytype=$_POST['v_moneytype'];//返回的货币类型
$v_md5str=$_POST['v_md5str'];//返回的货币类型

//v_oid，v_pstatus，v_amount，v_moneytype，key
$key='#(%#WU)(UFGDKJGNDFG';
$md5info=strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));

if($md5info!==$v_md5str){
    die("信息被篡改");
}

if($v_pstatus==20){
    //表示支付成功
    //根据订单的编号，取出支付状态的字段。根据支付状态进行判断修改，
    $sql="select pay_status from order_info where order_sn='$v_oid'";
    //echo $sql;exit;
    $res = mysql_query($sql,$conn);
    $info  = mysql_fetch_assoc($res);
    if($info['pay_status']==0){
        //更新支付状态
        $sql="update order_info set pay_status=1 where order_sn='$v_oid'";
         $res = mysql_query($sql,$conn);
         $num = mysql_affected_rows($conn);
         if($num>0){
                   echo "<script>alert('恭喜你，已经成功支付')</script>";
         }
    }else{
        die("已经支付成功");
    }

}else{
    //表示支付失败
    die("pay   no ok ");
}
?>