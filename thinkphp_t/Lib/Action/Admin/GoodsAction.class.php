<?php

class GoodsAction extends Action{
	public function add() {
		//echo 'this is the add action';
// 		$this->assign('goodsName', '手机');
// 		$this->assign('goodsPrice', 200);
		$data=array(
				'goodsName' => '电脑',
				'goodsPrice' => 2000,
				'goodsAddress' => 'shanghai'
		);
		$this->assign ($data);
		$this->display( 'add' );
	}
	
	public function _empty($id) {
		$sql = "select * from goods where id = '$id'";
		echo $sql;
	}
	
	public function info() {
		$id = $_GET['id'];
		$sql = "select * from goods where id = '$id'";
		echo $sql;
	}
}