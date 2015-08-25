<?php

	class SqlHelper {
		public $conn;
		public $dbname="empmanage";
		public $username="root";
		public $password="root";
		public $host="localhost";

		public function __construct(){
			$this->conn=mysql_connect($this->host,$this->username,$this->password);
			if(!$this->conn){
				die("连接失败".mysql_error());
			}
			mysql_select_db($this->dbname,$this->conn);
		}
		public function execute_dql($sql){
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			if (!$res) {
        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        exit;
      }  
			return $res;
		}

		public function execute_dql2($sql){
			$arr=array();
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			if (!$res) {
        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        exit;
      }  
      $i=0;
      while($row=mysql_fetch_assoc($res)){
      	$arr[$i++]=$row;
      }
      mysql_free_result($res);
			return $arr;
		}


		public function execute_dql_fenye($sql1,$sql2,&$fenyePage) {
			$res=mysql_query($sql1,$this->conn) or die(mysql_error());
			$arr=array();
			while($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}

			mysql_free_result($res);
			$res2=mysql_query($sql2,$this->conn) or die(mysql_error());
			if(!$res2) {
				echo "Could not successfully run query ($sql) from DB: " . mysql_error();
			}
			else if($row=mysql_fetch_row($res2)){
				$fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize);
				$fenyePage->rowCount=$row[0];
			}
			mysql_free_result($res2);

			$navigator="";
//navigator
	    $start=floor(($fenyePage->pageNow-1)/10)*10+1;
	    $index=$start; 
	    if ($fenyePage->pageNow > 1){
	        $prePage=$fenyePage->pageNow-1;
	        if($start > 1) {
	          $preTen=($fenyePage->pageNow-10)>$fenyePage->pageCount?$fenyePage->pageCount:$fenyePage->pageNow-10;
	          $navigator="<a href='empList.php?pageNow=$preTen'><<</a>&nbsp;";
	        }
	        $navigator.="<a href='empList.php?pageNow=$prePage'>prePage</a>&nbsp;";
	    }

	    for(;$start<$index+10;$start++) {
	      if($start>0 && $start<$fenyePage->pageCount) {
	        $navigator.="<a href='empList.php?pageNow=$start'>[$start]</a>";
	      }
	    }

	    if ($fenyePage->pageNow <$fenyePage->pageCount){
	      $nextPage=$fenyePage->pageNow+1;
	      $navigator.="&nbsp;<a href='empList.php?pageNow=$nextPage'>nextPage</a>";
	      if($start+9 < $fenyePage->pageCount) {
	        $nextTen=($fenyePage->pageNow+10)>$fenyePage->pageCount?$fenyePage->pageCount:$fenyePage->pageNow+10;
	        $navigator.="&nbsp;<a href='empList.php?pageNow=$nextTen'>>></a>&nbsp";
	      }
	    }

    	$navigator.=" pageNow {$fenyePage->pageNow} / total {$fenyePage->pageCount}";

			$fenyePage->res_array=$arr;
			$fenyePage->navigator=$navigator;
	}

		public function execute_dml($sql){
			$b=mysql_query($sql,$this->conn) or die(mysql_errno());
			if(!$b){
				echo "Could not successfully run query ($sql) from DB: " . mysql_error();
				return 0;
			}else{
				if(mysql_affected_rows($this->conn)>0){
					return 1;//execute ok
				}else{
					return 2;//no line is affected
				}
			}
		}

		public function close_connect(){
			if(!empty($this->conn)){
				mysql_close($this->conn);
			}
		}
	}
?>