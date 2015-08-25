<?php

class AdminModel extends Model {
	protected $fields = array (
			'id',
			'username',
			'password',
			'_autoinc' => true,
			'_pk' => 'id'
	);
	
}