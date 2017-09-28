<?php
	include 'connectdb.php';

	$username = $_POST['username'];

	$queryResult = $db->query('SELECT username FROM users');
	$valid = true;
	while (($registeredUsername = $queryResult->fetch_assoc()) && $valid) {
		if ($registeredUsername['username'] === $username) {
			$valid = false;
		}
	}

	if ($valid) {
		echo ("V");
	} else {
		echo ("X");
	}
?>