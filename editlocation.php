<?php
  
  include 'connectdb.php';

  session_start();

  $activeid = $_SESSION['user_id'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['location'];
    $oldlocation = $_POST['oldlocation'];
  }

  $query = "UPDATE user_location SET location='".$location."' WHERE user_id=".$activeid." AND location ='".$oldlocation."'";
  $queryresult = $db->query($query);
 ?>

<script type="text/javascript">
  window.location = '/wbd/editpreferred.php';
</script>
