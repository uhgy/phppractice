<?php

	require_once 'SqlHelper.class.php';
//logic process class, the operation about table admin
	class AdminService{

		public function checkAdmin($id, $password) {
			
			$sql="select password, name from admin where id=$id";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql($sql);
			if($row=mysql_fetch_assoc($res)){
				//
				if(md5($password)==$row['password']) {
					return $row['name'];
				}
			}
			mysql_free_result($res);

			$sqlHelper->close_connect();
			return false;
		}
	}

?>