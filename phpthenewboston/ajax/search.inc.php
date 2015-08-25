<?php
	if (isset($_GET['search_text'])) {
		echo $search_text = $_GET['search_text'];
		//echo 'something';
	}

	if (@mysql_connect('localhost','root','')) {
		if (@mysql_select_db('ajax')) {
			
		}
	}

?>