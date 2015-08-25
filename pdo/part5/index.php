<?php
try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=app','root','root');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

class GuestbookEntry {
	public $id, $name, $message, $posted,
				 $entry;
	public function __construct() {
		$this->entry = "{$this->name} posted: {$this->message}";
	}
}

$query = $handler->query('SELECT * FROM guestbook');
$query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');

while($r = $query->fetch()) {
	echo $r->entry, '<br>';
}
