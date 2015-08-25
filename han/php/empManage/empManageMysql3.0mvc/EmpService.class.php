<?php
	require_once 'common.php';
	class EmpService extends SqlHelper {

		function updateEmp($id,$name,$grade,$email,$salary){
			$sql="update empmanage set name='$name', grade=$grade, email='$email', salary=$salary where id=$id";
			$res=$this->db_update($sql);
			return $res;
		}


		function getEmpById($id){
			$sql="select * from empmanage where id=$id";
			$arr=$this->db_getAll($sql);
			$emp = new Emp();
			$emp->setId($arr[0]['id']);
			$emp->setName($arr[0]['name']);
			$emp->setGrade($arr[0]['grade']);
			$emp->setEmail($arr[0]['email']);
			$emp->setSalary($arr[0]['salary']);
			return $emp;
		}

		function addEmp($name,$grade,$email,$salary){
			$sql="insert into empmanage (name,grade,email,salary) values('$name',$grade,'$email',$salary)";
			$res=$this->db_update($sql);
			return $res;
		}

		function getPageCount($pageSize){
			$sql="select count(id) from empmanage";

			if($row=$this->db_countRow($sql)){
				$pageCount=ceil($row[0]/$pageSize);
			}
			return $pageCount;
		}

		function getEmpListByPage($pageNow, $pageSize){
			$sql="select * from empmanage limit ".$pageSize.' offset '.($pageNow-1)*$pageSize;
			$res=$sqlHelper->db_getAll($sql);
			return $res;
		}

	

		function getFenyePage($fenyePage){
			$sql1="select * from empmanage limit "
			.($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			$sql2="select count(id) from empmanage"; 
			$this->execute_dql_fenye($sql1,$sql2,$fenyePage);
		}

		function delEmpById($id){
			$sql="delete from empmanage where id=$id";
			$ret=$this->execute_dml($sql);
			return $ret;
		}

	}

?>