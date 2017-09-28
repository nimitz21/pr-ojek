<?php
	include 'connectdb.php';

	$email = $_POST['email'];
	$valid = true;

	if ($email === "") {
		$valid = false;
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
		echo ("V");
	} else {
		echo ("X");
	}
?>