<?php


//logic process class, the operation about table admin

	class AdminService extends SqlHelper{

		public function checkAdmin($id, $password) {
			
			$sql="select password, name from admin where id=$id";

			if($row=$this->db_getRow($sql)){
				//
				if(md5($password)==$row['password']) {
					return $row['name'];
				}
			}
		}
	}

?>