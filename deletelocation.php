<?php
  
  include 'connectdb.php';

  session_start();

  $activeid = $_SESSION['user_id'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['location'];
  }

  $query = "DELETE FROM user_location WHERE user_id=".$activeid." AND location ='".$location."'";
  $queryresult = $db->query($query);
 ?>

 <script type="text/javascript">
  window.location = "/wbd/editpreferred.php";
</script>
