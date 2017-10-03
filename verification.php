<?php
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm-password'];
	$phoneNumber = $_POST['phone-number'];
	$isDriver = $_POST['sign-as-driver'];

	include "connectdb.php";

	$db->query("INSERT INTO users (name, username, email, password, phonenumber, isdriver) VALUES ('" . $name . "','" . $username . "','" . $email . "','" . $password . "','" . $phoneNumber . "'," . $isDriver . ")");
	$id = $db->query("SELECT id FROM users WHERE username='" .$username."'")->fetch_assoc();
	if($isDriver == 0) {
		header('Location: http://localhost/wbd/profile.php?activeid='.$id['id']);
	} else {
		header('Location: http://localhost/wbd/selectDestination.php?activeid='.$id['id']);
	}
?>