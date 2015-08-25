<?php

class CategoryModel extends Model {
	protected $fields = array(
			'id',
			'name',
			'id',
			'content',
			'_autoinc'=>true,
			'_pk'=>'id'
	);
	
	protected $_map = array(
		'cate_id' => 'id',
		'cate_name' => 'name',
		'cate_content' => 'content',
		'cate_cid' => 'cid' 	
	);
	
	
}