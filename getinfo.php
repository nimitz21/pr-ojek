<?php 

$actid = $_GET["activeid"];

$query = "SELECT * FROM users WHERE ID=" . $actid;
$results = $db->query($query);

if($results->num_rows > 0) {
  $result = $results->fetch_assoc();
}

$ratequery = "SELECT avg(rating) as avgrate, count(rating) as votes FROM orders WHERE driver_id=" . $actid;
$ratings = $db->query($ratequery);

if($ratings->num_rows > 0) {
  $rating = $ratings->fetch_assoc();
}



?>