<?php
	include 'connectdb.php';

	$email = $_POST['email'];

	$queryResult = $db->query('SELECT email FROM users');
	$valid = true;
	while (($registeredEmail = $queryResult->fetch_assoc()) && $valid) {
		if ($registeredEmail['email'] === $email) {
			$valid = false;
		}
	}

	if ($valid) {
		echo ("V");
	} else {
		echo ("X");
	}
?>