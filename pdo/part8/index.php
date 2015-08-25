<?php
try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=app','root','root');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

$query = $handler->query('SELECT * FROM guestbook');
if($query->rowCount()) {
	while($r = $query->fetch(PDO::FETCH_OBJ)) {
		echo $r->message, '<br>';
	}
} else {
	echo 'No results';
}