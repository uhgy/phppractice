<?php


class Category {
	private $id;
	private $name;
	private $content;
	private $cid;
	
	public function __set($name,　$value) {
		$this->name = $value;
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function insert($row) {
		$sql = "insert into think_category values(null, '$this->name'.'$this->content'.'$this->cid')";
		mysql_query ( $sql );
	}
	
	public function delete() {
		$sql = "delete from think_category where id='$this->id'";
		mysql_query ( $sql );
	}
}

$cate=new Category();
$cate->name='电话';
$cate->content = '很好';
$cate->cid = '1';
$cate->insert();

