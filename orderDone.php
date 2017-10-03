<?php
	$user = $_GET['activeid'];
	$pickup = $_POST['pickup'];
	$destination = $_POST['destination'];
	$driver = $_POST['driver'];
	$rating = $_POST['rating'];
	$comment = $_POST['comment'];

	include 'connectdb.php';

	$db->query("INSERT INTO orders (user_id, driver_id, pickup, destination, rating, comment, date) VALUES (" . $user . "," . $driver . ",'" . $pickup . "','" . $destination . "'," . $rating . ",'" . $comment . "',CURDATE())");
	header("Location: http://localhost/wbd/selectDestination.php?activeid=" . $user);
?>