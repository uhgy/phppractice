<?php
	require_once 'sqlHelper.class.php';
	class EmpService {
		function getPageCount($pageSize){
			$sql="select count(id) from empmanage";
			$sqlHelper=new sqlHelper();
			$res=$sqlHelper->execute_dql($sql);

			if($row=mysql_fetch_row($res)){
				$pageCount=ceil($row[0]/$pageSize);
			}
			mysql_free_result($res);
			$sqlHelper->close_connect();
			return $pageCount;
		}

		function getEmpListByPage($pageNow, $pageSize){
			$sql="select * from empmanage limit ".$pageSize.' offset '.($pageNow-1)*$pageSize;

			$sqlHelper=new sqlHelper();
			$res=$sqlHelper->execute_dql2($sql);

			//mysql_free_result($res);
			$sqlHelper->close_connect();
			//print_r($res);
			return $res;
		}

	

		function getFenyePage($fenyePage){
			$sqlHelper=new SqlHelper();
			$sql1="select * from empmanage limit "
			.($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			$sql2="select count(id) from empmanage"; 
			$sqlHelper->execute_dql_fenye($sql1,$sql2,$fenyePage);
			$sqlHelper->close_connect();
		}

		function delEmpById($id){
			$sqlHelper=new SqlHelper();
			$sql="delete from empmanage where id=$id";
			$sqlHelper->execute_dml($sql);

		}

	}

?>