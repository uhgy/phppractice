<?php

	class SqlHelper {
		// public $conn;
		// public $dbname="empmanage";
		// public $username="root";
		// public $password="root";
		// public $host="localhost";

		private $host;
		private $port;
		private $username;
		private $password;
		private $dbname;
		private $charset;
		private $prefix;			//表前缀
		private $conn;				//连接资源

		//构造方法，初始化对象的属性
		/*
		 * @param1 array $arr，默认为空，里面是一个关联数组，里面有7个元素
		 * array('host' => 'localhost','port' => '3306');
		 */
		public function __construct($arr = array()){
			//初始化
			$this->host = isset($arr['host']) ? $arr['host'] : 'localhost';
			$this->port = isset($arr['port']) ? $arr['port'] : '3306';
			$this->user = isset($arr['user']) ? $arr['user'] : 'root';
			$this->pass = isset($arr['pass']) ? $arr['pass'] : 'root';
			$this->dbname = isset($arr['dbname']) ? $arr['dbname'] : 'empmanage';
			$this->charset = isset($arr['charset']) ? $arr['charset'] : 'utf8';
			$this->prefix = isset($arr['prefix']) ? $arr['prefix'] : 'pro_';

			//连接数据库
			$this->connect();

			//设置字符集
			$this->setCharset();

			//选择数据库
			$this->setDbname();
		}

		private function connect(){
			//mysql扩展连接
			$this->link = mysql_connect($this->host . ':' . $this->port,$this->user,$this->pass);

			//判断结果
			if(!$this->link){
				//结果出错了
				//暴力处理，如果是真实线上项目（生产环境）必须写入到日志文件
				echo '数据库连接错误：<br/>';
				echo '错误编号' . mysql_errno() . '<br/>';
				echo '错误内容' . mysql_error() . '<br/>';
				exit;
			}
		}

		/*
		 * 设置字符集
		*/
		private function setCharset(){
			//设置
			$this->db_query("set names {$this->charset}");
		}

		/*
		 * 选择数据库
		*/
		private function setDbname(){
			$this->db_query("use {$this->dbname}");
		}

		public function db_insert($sql){
			//发送数据
			$this->db_query($sql);
			
			//成功返回自增ID
			return mysql_affected_rows() ? mysql_insert_id() : FALSE;
		}

		/*
		 * 删除数据
		 * @param1 string $sql，要执行的删除语句
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		*/
		public function db_delete($sql){
			//发送SQL
			$this->db_query($sql);

			//判断结果
			return mysql_affected_rows() ? mysql_affected_rows() : FALSE;
		}

		/*
		 * 更新数据
		 * @param1 string $sql，要执行的更新语句
		 * @return Boolean，成功返回受影响的行数，失败返回FALSE
		*/
		public function db_update($sql){ //execute_dml
			//发送SQL
			$this->db_query($sql);

			//判断结果
			return mysql_affected_rows() ? mysql_affected_rows() : FALSE;
		}

		/*
		 * 查询：查询一条记录
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个数组，失败返回FALSE
		*/
		public function db_getRow($sql){
			//发送SQL
			$res = $this->db_query($sql);

			//判断返回
			return mysql_num_rows($res) ? mysql_fetch_assoc($res) : FALSE;
		}

		/*
		 * 查询：查询一条记录
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个数组，失败返回FALSE
		*/
		public function db_countRow($sql){
			//发送SQL
			$res = $this->db_query($sql);

			//判断返回
			return mysql_fetch_row($res) ? mysql_fetch_row($res) : FALSE;
		}		

		/*
		 * 查询：查询多条记录
		 * @param1 string $sql，要查询的SQL语句
		 * @return mixed，成功返回一个二维数组，失败返回FALSE
		*/
		public function db_getAll($sql){   //execute_dql2
			//发送SQL
			$res = $this->db_query($sql);

			//判断返回
			if(mysql_num_rows($res)){
				//循环遍历
				$list = array();
				
				//遍历
				while($row = mysql_fetch_assoc($res)){
					$list[] = $row;
				}

				//返回
				return $list;
			}

			//返回FALSE
			return FALSE;
		}

		/*
		 * mysql_query错误处理
		 * @param1 string $sql，需要执行的SQL语句
		 * @return mixed，只要语句不出错，全部返回
		*/
		public function db_query($sql){ //execute_dql
			//发送SQL
			$res = mysql_query($sql);

			//判断结果
			if(!$res){
				//结果出错了
				//暴力处理，如果是真实线上项目（生产环境）必须写入到日志文件
				echo '语句出现错误：<br/>';
				echo '错误编号' . mysql_errno() . '<br/>';
				echo '错误内容' . mysql_error() . '<br/>';
				exit;
			}
			//没有错误
			return $res;
		}

		//__sleep方法
		public function __sleep(){
			//返回需要保存的属性的数组
			return array('host','port','user','pass','dbname','charset','prefix');
		}

		//__wakeup方法
		public function __wakeup(){
			//连接资源
			$this->connect();
			//设置字符集和选中数据库
			$this->setCharset();
			$this->setDbname();
		}	

		/*
		 * 获取完整的表名
		*/
		protected function getTableName(){
			//完整表名：前缀+表名
			return $this->prefix . $this->table;
		}



		public function execute_dql_fenye($sql1,$sql2,&$fenyePage) {
			$res=$this->db_query($sql1);
			$arr=array();
			while($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}


			$res2=$this->db_query($sql2);
			if($row=mysql_fetch_row($res2)){
				$fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize);
				$fenyePage->rowCount=$row[0];
			}


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



		public function close_connect(){
			if(!empty($this->conn)){
				mysql_close($this->conn);
			}
		}
	}
?>