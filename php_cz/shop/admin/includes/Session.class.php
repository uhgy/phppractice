<?php

	class Session extends DB{

		protected $table = 'session';

		public function __construct(){

			parent::__construct();

			session_set_save_handler(
				array($this,'sess_open'),
				array($this,'sess_close'),
				array($this,'sess_read'),
				array($this,'sess_write'),
				array($this,'sess_destroy'),
				array($this,'sess_gc')
			);

			@session_start();
		}

		public function sess_open(){

		}

		public function sess_close(){

		}

		public function sess_read($s_id){
			$expire = time() - ini_get('session.gc_maxlifetime');
			$sql = "select * from {$this->getTableName()} where s_id = '{$s_id}' and s_expire >= '{$expire}'";
			$sess = $this->db_getRow($sql);
			if($sess){
				return $sess['s_info'];
			}
			return '';
		}

		public function sess_write($s_id,$s_info){
			$time = time();
			$sql = "replace into {$this->getTableName()} 
			values('{$s_id}','{$s_info}','{$time}')";
			return $this->db_insert($sql);
		}

		public function sess_destroy($s_id){
			$sql = "delete from {$this->getTableName()} where s_id = '{$s_id}'";

			return $this->db_delete($sql);
		}

		public function sess_gc(){
			$expire = time() - ini_get('session.gc_maxlifetime');
			$sql = "delete from {$this->getTableName()} where s_expire < '{$expire}'";
			return $this->db_delete($sql);
		}
	}