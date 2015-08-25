<?php
class EmptyAction extends Action {

	public function _empty($name) {
		$sql = "select * from city where name='" . MODULE_NAME . "'";
		echo $sql;
	}
}