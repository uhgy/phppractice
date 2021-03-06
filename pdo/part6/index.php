<?php
try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=app','root','root');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

$name = 'Joshua';
$message = 'Test';

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (?, ?, NOW())";
$query = $handler->prepare($sql);

$query->execute(array($name, $message));