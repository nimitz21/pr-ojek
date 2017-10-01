<?php
  
  include 'connectdb.php';

  session_start();

  $activeid = $_SESSION['user_id'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['location'];
    echo $userid;
    echo $location;
  }

  $query = "UPDATE user_location SET location='".$location."' WHERE user_id=".$activeid."";
  $queryresult = $db->query($query);
 ?>

 <script type="text/javascript">
  window.location = "/wbd/TugasBesar1_2017/editpreferred.php";
</script>
