<?php

//ȡ���û�����Ĺؼ���
$content=$_POST['content'];
$sql="select name from category where name like '$content%' order by id desc";
mysql_connect ( 'localhost', 'root', 'root' );
mysql_select_db ( '' );
mysql_query ( 'set names utf8' );
$result = mysql_query ( $sql );
// ��ȡ������
$num = mysql_num_rows ( $result );
// ��������
$data = array ();
// ���������
for($i = 0; $i < $num; $i ++) {
	// ��ȡһ������
	$row = mysql_fetch_assoc ( $result );
	// ��һά���������һ������Ԫ���У�����data�Ƕ�ά����
	$data [] = $row;
}
// �Զ�ά�������json����
echo json_encode ( $data );