#<?php
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm-password'];
	$phoneNumber = $_POST['phone-number'];
	$isDriver = $_POST['sign-as-driver'];

	include "connectdb.php";

	$db->query("INSERT INTO users (name, username, email, password, phonenumber, isdriver) VALUES ('" . $name . "','" . $username . "','" . $email . "','" . $password . "','" . $phoneNumber . "'," . $isDriver . ")");
?>

<script type="text/javascript">
	window.location = "/wbd/profile.php";
</script>