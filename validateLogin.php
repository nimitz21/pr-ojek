<?php
	include 'connectdb.php';
	
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	$valid = true;

	if (($username === "") or ($password === "")) {
		$valid = false;
	}

	if ($valid) {
		$found = false;
		$queryResult = $db->query('SELECT username, password FROM users');
		while (($validuser = $queryResult->fetch_assoc()) && $valid && !$found) {
			if (($validuser['username'] === $username) and ($validuser['password'] === $password)) {
				$found = true;
			}
		}
		if ($found) {
			$valid = true;
		} else {
			$valid = false;
		}
	}

	if ($valid) {
		$userid = $db->query("SELECT id FROM users WHERE username = '".$username."'")->fetch_assoc();
		header('Location: http://localhost/wbd/profile.php?activeid='.$userid['id']);		
	} else {
		header('Location: http://localhost/wbd/login.php?errorcode=1');

	}
?>
