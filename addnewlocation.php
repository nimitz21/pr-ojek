<?php
  
  include 'connectdb.php';

  session_start();

  $activeid = $_SESSION['user_id'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['newlocation'];
  }

  $query = "INSERT INTO user_location VALUES (". $activeid .  ",'" . $location . "');";
  $queryresult = $db->query($query);
 ?>

 <script type="text/javascript">
  window.location = "/wbd/TugasBesar1_2017/editlocation.php";
</script>
