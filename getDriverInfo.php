<?php
	$driverId = $_POST['driver'];

	$driver = $db->query("SELECT username, name, picture FROM users WHERE id=" . $driverId)->fetch_assoc();
?>