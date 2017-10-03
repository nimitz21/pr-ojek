<?php 
$actid = $_GET["activeid"];
$locquery = "SELECT location from user_location WHERE user_id=" . $actid;
$locresults = $db->query($locquery);

$locations = array();

if($locresults->num_rows > 0) {
  while($location = $locresults->fetch_assoc()) {
    array_push($locations, $location);
  }
}

 ?>