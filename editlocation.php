<?php
  
  include 'connectdb.php';

  $activeid = $_GET['activeid'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['location'];
    $oldlocation = $_POST['oldlocation'];
  }

  $query = "UPDATE user_location SET location='".$location."' WHERE user_id=".$activeid." AND location ='".$oldlocation."'";
  $queryresult = $db->query($query);
 ?>

<script type="text/javascript">

  let querystring = window.location.search;
  window.location = '/wbd/editpreferred.php' + querystring;
</script>
