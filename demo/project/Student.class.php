<?php

	//Student表
	class Student extends DB{
		//属性
		public $table = 'student';

		/*
	 * 获取学生信息
	 * @param1 int $page，当前要获取的第几页，默认获取第一页的数据
	 * @param2 int $length，每页显示的数据量
	 * @return  array $students，二维数组
	*/
	function getStudents($page = 1,$length = 5){
		//计算limit的起始位置
		$offset = ($page - 1) * $length;

		//获取学生和对应的班级信息
		$sql = "select * from {$this->getTableName()} ps left join pro_class pc on ps.c_id = pc.c_id limit {$offset},{$length}";

		//执行
		return $this->db_getAll($sql);
	}

	/*
	 * 获取学生的总记录数
	 * @return int，总记录数
	 */
	function getCounts(){
		//组织SQL
		$sql = "select count(*) as s_count from {$this->getTableName()} ps left join pro_class pc on ps.c_id = pc.c_id";

		//执行
		$res = $this->db_getRow($sql);

		//返回数据
		return $res['s_count'];
	}
	}