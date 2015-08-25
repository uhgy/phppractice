<?php

	//Admin表对应的类
	class AdminModel extends DB{
		//属性
		protected $table = 'admin';

		/*
		 * 通过用户名和密码验证用户信息
		 * @param1 string $username，用户名
		 * @param2 string $password，用户密码
		 * @return mixed，成功返回用户信息，失败返回FALSE
		*/
		public function checkByUsernameAndPassword($username,$password){
			//加密密码
			$password = md5($password);

			//转义
			$username = addslashes($username);

			//组织SQL语句
			$sql = "select * from {$this->getTableName()} where a_username = '{$username}' and a_password = '{$password}'";
			//echo $sql;exit;

			//调用DB类的getRow方法
			return $this->db_getRow($sql);
		}

		/*
		 * 更新用户登录信息
		 * @param1 int $id，当前要更新用户的id
		 * @return Boolean，成功返回true，失败返回FALSE
		 */
		public function updateLoginInfo($id){
			//获取要更新信息
			$ip = $_SERVER['REMOTE_ADDR'];
			$time = time();

			//组织SQL语句
			$sql = "update {$this->getTableName()} set a_last_log_ip = '{$ip}',a_last_log_time = '{$time}' where a_id = '{$id}'";

			//调用父类更新
			return $this->db_update($sql);
		}

		/*
		 * 通过用户ID获取用户信息
		 * @param1 int $id，用户的ID信息
		 * @return mixed，成功返回用户信息（数组），失败返回FALSE
		*/
		public function getUserInfoById($id){
			//对id进行过滤
			$id = addslashes($id);

			//组织SQL
			$sql = "select * from {$this->getTableName()} where a_id='{$id}' limit 1";

			//调用父类方法
			return $this->db_getRow($sql);
		}

	}