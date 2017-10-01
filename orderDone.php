<?php
	$_SESSION["user_id"] = 1;
	$user = $_SESSION['user_id'];
	$pickup = $_POST['pickup'];
	$destination = $_POST['destination'];
	$driver = $_POST['driver'];
	$rating = $_POST['rating'];
	$comment = $_POST['comment'];

	include 'connectdb.php';

	echo("INSERT INTO orders (user_id, driver_id, pickup, destination, rating, comment, date) VALUES (" . $user . "," . $driver . ",'" . $pickup . "','" . $destination . "'," . $rating . ",'" . $comment . "',CURDATE())");
	$db->query("INSERT INTO orders (user_id, driver_id, pickup, destination, rating, comment, date) VALUES (" . $user . "," . $driver . ",'" . $pickup . "','" . $destination . "'," . $rating . ",'" . $comment . ",CURDATE())");

?>