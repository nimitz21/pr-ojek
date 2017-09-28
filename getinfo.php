<?php 

$actid = $_SESSION["user_id"];

$query = "SELECT * FROM users WHERE ID=" . $actid;
$results = $db->query($query);

if($results->num_rows > 0) {
  $result = $results->fetch_assoc();
}

$ratequery = "SELECT avg(rating) as avgrate, count(rating) as votes FROM orders WHERE user_id=" . $actid;
$ratings = $db->query($ratequery);

if($ratings->num_rows > 0) {
  $rating = $ratings->fetch_assoc();
}

$locquery = "SELECT location from user_location WHERE user_id=" . $actid;
$locresults = $db->query($locquery);

$locations = array();

if($locresults->num_rows > 0) {
  while($location = $locresults->fetch_assoc()) {
    array_push($locations, $location);
  }
}


?>