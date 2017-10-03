<?php
	include 'connectdb.php';

	$email = $_POST['email'];
	$valid = true;

	$valid = $email !== "";

	if ($valid) {
		$valid = filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	if ($valid) {
		$queryResult = $db->query('SELECT email FROM users');
		while (($registeredEmail = $queryResult->fetch_assoc()) && $valid) {
			if ($registeredEmail['email'] === $email) {
				$valid = false;
			}
		}
	}

	if ($valid) {
		echo ("&#10004");
	} else {
		echo ("&#10008");
	}
?>