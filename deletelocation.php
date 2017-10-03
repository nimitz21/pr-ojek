<?php
  
  include 'connectdb.php';
  $activeid = $_GET['activeid'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['location'];
  }

  $query = "DELETE FROM user_location WHERE user_id=".$activeid." AND location ='".$location."'";
  $queryresult = $db->query($query);
 ?>

 <script type="text/javascript">
  let querystring = window.location.search;
  window.location = "/wbd/editpreferred.php" + querystring;
</script>
