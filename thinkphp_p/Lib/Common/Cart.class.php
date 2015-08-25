<?php

/**
 * 
 * 购物车类
 *
 */
class Cart {
	public $orderID;
	public $goodsID;
	public $name;
	public $photo;
	public $price;
	public $num;
	
	/**
	 * 构造函数
	 * 启动session机制
	 */
	public function __construct() {
		//session_start ();
	}
	
	/**
	 * 添加商品
	 */
	public function add() { // 添加
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // 商品总件数
		for($i = 0; $i < $count; $i ++) {
			if ($_SESSION ['Cart'] [$i] ['goodsID'] == $this->goodsID) {
				$_SESSION ['Cart'] [$i] ['num'] += $this->num;
				return;
			}
		}
		$data = array (
				'goodsID' => $this->goodsID,
				'name' => $this->name,
				'photo' => $this->photo,
				'num' => $this->num,
				'price' => $this->price 
		);
		$_SESSION ['Cart'] [] = $data;
	}
	
	/**
	 * 修改商品
	 */
	public function update() { // 修改
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // 商品总件数
		for($i = 0; $i < $count; $i ++) {
			// 如果第i件商品的ID与本次修改的商品ID相同
			if ($_SESSION ['Cart'] [$i] ['id'] == $this->proID) {
				// 修改第i件商品的数量
				$_SESSION ['Cart'] [$i] ['num'] = $this->proNum;
				return;
			}
		}
	}
	
	/**
	 * 查询购物车中所有数据
	 *
	 * @return array
	 */
	public function getList() { // 查询
	    session_start();
		$data = array ();
		$count = count ( $_SESSION ['Cart'] ); // 总品总数
		for($i = 0; $i < $count; $i ++) {
			$data [] = $_SESSION ['Cart'] [$i]; // 将每行数据添加至data某个元素中
		}
		return $data;
	}
	
	/**
	 * 移除商品
	 */
	public function remove() { // 移除某种商品
		session_start();
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // 商品总件数
		for($i = 0; $i < $count; $i ++) {
			// 如果第i件商品的ID与本次修改的商品ID相同
			if ($_SESSION ['Cart'] [$i] ['goodsID'] == $this->goodsID) {
				// 删除session第i行的值
				unset ( $_SESSION ['Cart'] [$i] );
				// 重新排列数组下标
				$_SESSION ['Cart'] = array_values ( $_SESSION ['Cart'] );
				return;
			}
		}
	}
}

?>