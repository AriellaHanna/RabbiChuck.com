<?php
	// Fetching Values from URL.
	$name = $_POST['name1'];
	$email = $_POST['email1'];
	$message = $_POST['message1'];
	$phone = $_POST['phone1'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
	// After sanitization Validation is performed
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if (!preg_match("/^[0-9]{10}$/", $contact)) {
			echo "<span>* Please enter valid phone number. *</span>";
		} 
		else {
			$subject = $name;
			// To send HTML mail, the Content-type header must be set.
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From:' . $email. "\r\n"; // Sender's Email
			$template = '<div style="padding:50px; color:white;">New message:<br/>'
			. 'Name:' . $name . '<br/>'
			. 'Email:' . $email . '<br/>'
			. 'Phone No:' . $phone . '<br/>'
			. 'Message:' . $message . '<br/><br/>'
			$sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
			// Message lines should not exceed 70 characters (PHP rule), so wrap it.
			$sendmessage = wordwrap($sendmessage, 70);
			// Send mail by PHP Mail Function.
			mail("ariellamhanna@gmail.com", $subject, $sendmessage, $headers);
			echo "Message sent successfully.";
		}
	}
	else {
		echo "<span>* invalid email *</span>";
	}
?>