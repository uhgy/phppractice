<?php


	class Admin extends DB{

		protected $table = 'admin';


		/*
		 * 通过用户名和密码验证用户信息
		 * @param1 string $username，用户名
		 * @param2 string $password
		 * return mixed,成功返回用户信息，失败返回FALSE
		*/
		public function checkByUsernameAndPassword($username, $password){
			$password = md5($password);
			$username = addslashes($username);
			var_dump($username);
			$sql = "select * from {$this->getTableName()} where a_username = '{$username}' 
									and a_password = '{$password}'";
			var_dump($sql); 
			return $this->db_getRow($sql);
		}


		/*
		 * 更新用户登录信息
		 * @param1 int $id, 当前要更新用户的id
		 * @return Boolean，成功返回true,失败返回FALSE
		 *
		*/ 
		public function updateLoginInfo($id){
			$ip = $_SERVER['REMOTE_ADDR'];
			$time = time();

			$sql = "update {$this->getTableName()} set a_last_log_ip = '{ip}',a_last_log_time = 
				'{$time}' where a_id = '{$id}'";

			return $this->db_update($sql);
		}


		/*
		 * 通过用户ID获取用户信息
		 * @param1 int $id
		 * @return mixed 成功返回用户，失败返回FALSE
		 *
		 *
		*/
		public function getUserInfoById($id){
			$id = addslashes($id);

			$sql = "select * from {$this->getTableName()} where a_id='{$id}' limit 1";

			return $this->db_getRow($sql);
		}

	}