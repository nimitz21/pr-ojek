<?php
	include 'connectdb.php';

	$username = $_POST['username'];
	$valid = true;

	if ($username === "") {
		$valid = false;
	}

	if ($valid) {
		$queryResult = $db->query('SELECT username FROM users');
		while (($registeredUsername = $queryResult->fetch_assoc()) && $valid) {
			if ($registeredUsername['username'] === $username) {
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