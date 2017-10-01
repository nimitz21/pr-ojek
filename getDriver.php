<?php
	$pickingPoint = $_POST['picking-point'];
	$destination = $_POST['destination'];
	$preferredDriver = $_POST['preferred-driver'];

	$driverQuery = "SELECT id, name, picture FROM (SELECT id, name, picture FROM users WHERE isDriver = 1) as driver JOIN user_location on driver.id = user_location.user_id WHERE location = '" . $pickingPoint . "'";
	$driverResults = $db->query($driverQuery);


	$drivers = array();
	$preferredDrivers = array();
	$otherDrivers = array();

	while ($driver = $driverResults->fetch_assoc()) {
		$ratingQuery = "SELECT avg(rating) as avgrate, count(rating) as votes FROM orders WHERE driver_id=" . $driver['id'];
		$ratingResult = $db->query($ratingQuery);
		$driver = array_merge($driver, $ratingResult->fetch_assoc());
		if ($driver['name'] == $preferredDriver) {
			array_push($preferredDrivers, $driver);
		} else {
			array_push($otherDrivers, $driver);
		}
	}
?>