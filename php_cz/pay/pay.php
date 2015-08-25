<?php
header("content-type:text/html;charset=utf-8");
//接收提交的信息。生成一个订单号，完成订单的入库。
$order_sn = "sn_".uniqid();
$money=$_POST['money'];
require 'init.php';

$sql="insert into order_info(order_sn,order_amount) values('$order_sn','$money')";

$res = mysql_query($sql,$conn);
$num = mysql_insert_id($conn);

if($num<1){
    die("提交订单失败");
}
echo "你的订单已经提交，订单号是：".$order_sn;
//'1009001'=>'#(%#WU)(UFGDKJGNDFG',
$v_mid='1009001';//商户号：
$v_oid=$order_sn;//订单编号
$v_amount=$money;//订单的金额
$v_moneytype='CNY';//交易的币种
//支付动作完成后返回到该url，支付结果以POST方式发送
//该u_url告诉第三方支付平台把用户的支付结果，给发到该页面中来。
$v_url='http://localhost/workspace/php_cz/pay/access.php';
$key='#(%#WU)(UFGDKJGNDFG';//使用密钥时，要注意尽量使用单引号。
//$v_md5info="";
//将订单中的v_amount v_moneytype v_oid v_mid v_url key六个参数的value值拼成一个无间隔的字符串
$v_md5info=strtoupper(md5($v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>

<style type="text/css">
</style>
</head>
    <body>
    <form action="http://localhost/workspace/php_cz/pay/paySimulator/index.php" method="post">
        <input type='hidden' name='v_mid' value="<?php echo $v_mid;?>">  
        <input type='hidden' name='v_oid' value="<?php echo $v_oid;?>">
        <input type='hidden' name='v_amount' value="<?php echo $v_amount;?>"> 
        <input type='hidden' name='v_moneytype' value="<?php echo $v_moneytype;?>"> 
        <input type='hidden' name='v_url'  value="<?php echo $v_url;?>">
        <input type='hidden' name='v_md5info' value="<?php echo $v_md5info;?>"> 
        <input type="submit" value="在线支付"/>
    </form>
    </body>
</html>