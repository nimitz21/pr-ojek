<?php
	include 'connectdb.php';

	$username = $_POST['username'];
	$valid = true;

	$valid = $username !== "";

	if ($valid) {
		$queryResult = $db->query('SELECT username FROM users');
		while (($registeredUsername = $queryResult->fetch_assoc()) && $valid) {
			if ($registeredUsername['username'] === $username) {
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