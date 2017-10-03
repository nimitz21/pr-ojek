<?php
  
  include 'connectdb.php';
  $activeid = $_GET['activeid'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['newlocation'];
  }

  $query = "INSERT INTO user_location VALUES (". $activeid .  ",'" . $location . "');";
  $queryresult = $db->query($query);
 ?>

 <script type="text/javascript">

  let querystring = window.location.search;
  window.location = "/wbd/editpreferred.php" + querystring;
</script>
