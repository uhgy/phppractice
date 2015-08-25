<?php

	//User表对应的类
	class User extends DB{
		//属性
		protected $table = 'user';

	 /*
	  * 判断用户名是否已经存在
	  * @param1 string $name，要判断的用户名
	  * @return boolean，成功返回TRUE，失败返回false
	  */
	public function checkUsername($name){
		//组织SQL
		$sql = "select * from {$this->getTableName()} where u_username = '{$name}'";

		//调用DB类执行
		return $this->db_getRow($sql);
	 }


	 /*
	  * 将用户注册信息写到数据库
	  * @param1 string $username，用户名
	  * @param2 string $password，密码
	  *
	  * @return Boolean，成功返回TRUE，失败返回false
	  */
	 function insertUserAndPass($username,$password){
		//加密
		$password = md5($password);

		//组织SQL
		$sql = "insert into {$this->getTableName()} values(null,'{$username}','{$password}',default)";

		//执行
		return $this->db_insert($sql);
	 }

	 /*
	  * 登录验证
	  * @param1 string $username，用户名
	  * @param2 string $password，用户密码
	  * @return mixed，如果成功返回当前用户的用户信息，如果失败返回false
	  */
	 function checkLogin($username,$password){
		//加密
		$password = md5($password);

		//转义
		$username = addslashes($username);

		//组织SQL
		$sql = "select * from {$this->getTableName()} where u_username='{$username}' and u_password='{$password}'";

		//执行
		return $this->db_getRow($sql);
	 }

	 /*
	  * 更改用户登录状态
	  * @param1 int $id，当前登录成功的用户的id
	  * @param2 int $status，当前需要修改成哪个状态，默认为1，表示是登录成功
	  * @return Boolean
	 */
	 function updateStatus($id,$status){
		//组织SQL
		$sql = "update {$this->getTableName()} set u_status = '{$status}' where u_id='{$id}'";

		//执行
		return $this->db_update($sql);
	 }

	 /*
	 * 判断用户是否登录成功
	 * @param1 int $id，当前用户的id
	 * @return mixed，成功返回数组（用户信息），失败返回false
	 */
	function checkStatus($id){
		//组织SQL
		$sql = "select * from {$this->getTableName()} where u_id='{$id}' and u_status=1";

		//执行
		return $this->db_getRow($sql);
	}

	/*
	 * 通过用户id获取用户信息
	 * @param1 int $id，用户的id
	 * @return mixed，用户的信息，失败返回false
	 */
	function getUserById($id){
		//组织SQL
		$sql = "select * from {$this->getTableName()} where u_id = '{$id}'";

		//执行
		return $this->db_getRow($sql);
	}

	/*
	 * 通过用户id和原始密码来验证信息
	 * @param1 int $id，用户id
	 * @param2 string $password，原始密码
	 * @return Boolean，成功返回TRUE，失败返回false
	 */
	function checkByIdAndPass($id,$password){
		//密码加密
		$password = md5($password);

		//组织SQL
		$sql = "select * from {$this->getTableName()} where u_id='{$id}' and u_password ='{$password}'";

		return $this->db_getRow($sql);
	}


	/*
	 * 通过用户id更新用户密码
	 * @param1 int $id，用户id
	 * @param2 string $password，新密码
	 * @return Boolean，成功返回TRUE，失败返回FALSE
	*/
	function updatePassById($id,$password){
		//加密
		$password = md5($password);

		//组织SQL
		$sql = "update {$this->getTableName()} set u_password = '{$password}',u_status =0 where u_id = '{$id}'";
		
		return $this->db_update($sql);
	}
	}