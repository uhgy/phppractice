<?php

/**
 * 
 * ���ﳵ��
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
	 * ���캯��
	 * ����session����
	 */
	public function __construct() {
		//session_start ();
	}
	
	/**
	 * �����Ʒ
	 */
	public function add() { // ���
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // ��Ʒ�ܼ���
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
	 * �޸���Ʒ
	 */
	public function update() { // �޸�
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // ��Ʒ�ܼ���
		for($i = 0; $i < $count; $i ++) {
			// �����i����Ʒ��ID�뱾���޸ĵ���ƷID��ͬ
			if ($_SESSION ['Cart'] [$i] ['id'] == $this->proID) {
				// �޸ĵ�i����Ʒ������
				$_SESSION ['Cart'] [$i] ['num'] = $this->proNum;
				return;
			}
		}
	}
	
	/**
	 * ��ѯ���ﳵ����������
	 *
	 * @return array
	 */
	public function getList() { // ��ѯ
	    session_start();
		$data = array ();
		$count = count ( $_SESSION ['Cart'] ); // ��Ʒ����
		for($i = 0; $i < $count; $i ++) {
			$data [] = $_SESSION ['Cart'] [$i]; // ��ÿ�����������dataĳ��Ԫ����
		}
		return $data;
	}
	
	/**
	 * �Ƴ���Ʒ
	 */
	public function remove() { // �Ƴ�ĳ����Ʒ
		session_start();
		$count = isset ( $_SESSION ['Cart'] ) ? count ( $_SESSION ['Cart'] ) : 0; // ��Ʒ�ܼ���
		for($i = 0; $i < $count; $i ++) {
			// �����i����Ʒ��ID�뱾���޸ĵ���ƷID��ͬ
			if ($_SESSION ['Cart'] [$i] ['goodsID'] == $this->goodsID) {
				// ɾ��session��i�е�ֵ
				unset ( $_SESSION ['Cart'] [$i] );
				// �������������±�
				$_SESSION ['Cart'] = array_values ( $_SESSION ['Cart'] );
				return;
			}
		}
	}
}

?>