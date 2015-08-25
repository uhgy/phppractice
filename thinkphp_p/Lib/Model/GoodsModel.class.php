<?php
class GoodsModel extends Model {
	protected $fields = array(
			'id',
			'name',
			'cid',
			'price',
			'photo',
			'remark',
			'_autoinc'=>true,
			'_pk'=>'id'
	);
}
