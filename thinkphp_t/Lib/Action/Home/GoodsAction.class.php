<?php

class GoodsAction extends Action{
	public function add() {
		//echo 'this is the add action';

		$this->display( 'add' );
	}
	
	public function _empty($id) {
		$sql = "select * from goods where id = '$id'";
		echo $sql;
	}
	
	public function info() {
		$id = $_GET['id'];
		$sql = "select * from goods where id = '$id'";
		echo '这是前台info方法';
	}
}