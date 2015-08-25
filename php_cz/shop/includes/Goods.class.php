<?php 
	class Goods extends DB{
		

		protected $table = 'goods';

		public function getAllGoods($page,$type = 0){
			$length = $GLOBALS['config']['admin_goods_pagecounts'];
			$start = ($page - 1) * $length;
			$where = "where g_is_delete = {$type}";
			$sql = "select * from {$this->getTableName()} {$where} limit {$start},{$length}";

			$lists = array();

			$lists['lists'] = $this->db_getAll($sql);
			$sql = "select count(*) pagecounts from {$this->getTableName()} {$where}";
	
			$lists['pagecounts'] = $this->db_getRow($sql)['pagecounts'];
			
			
			return $lists;
		}

		public function removeGoodsById($g_id){
			$sql = "update {$this->getTableName()} set g_is_delete = 1 where g_id = '{$g_id}'";
			return $this->db_update($sql);
		}

		public function restoreGoodsById($g_id){
			$sql = "update {$this->getTableName()} set g_is_delete = 0 where g_id = '{$g_id}'";
			return $this->db_update($sql);
		}

	}