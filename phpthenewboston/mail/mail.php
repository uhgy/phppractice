<?php

if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];

	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
		if (strlen($contact_name)>25 || strlen($contact_email)>25 ||strlen($contact_text)>1000) {
			echo 'sorry maxlength for some field has been exceeded';
		} else {
			$to = '826968770@qq.com';
			$subject = 'this is an email.';
			$body = $contact_name."\n".$contact_text;
			$headers = 'From: '.$contact_email;

		if (mail($to, $subject, $body, $headers)) {
			echo 'Email has been sent to '.$to;
		} else {
			echo 'There was an error sending the email.';
		}
	}
	} else {
		echo 'All fields are required.';
	}
}
?>

<form action="mail.php" method="POST">
	Name:<br><input type="text" name="contact_name" maxlength="25"><br><br>
	Email address:<br><input type="text" name="contact_email" maxlength="25"><br><br>
	Message:<br>
	<textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea><br><br>
	<input type="submit" value="Send">
</form>