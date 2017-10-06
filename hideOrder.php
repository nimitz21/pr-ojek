<?php
	include 'connectdb.php';

	if ($_POST['hider'] == "driver") {
		$db->query("UPDATE orders SET hidden_by_driver = 1 WHERE id = ". $_POST['orderId']);
	} else {
		$db->query("UPDATE orders SET hidden_by_user = 1 WHERE id = ". $_POST['orderId']);
	}

	echo ("UPDATE orders SET hidden_by_driver = 1 WHERE id = ". $_POST['orderId']);
?>