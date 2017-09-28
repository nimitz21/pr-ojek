<?php 
session_start();
unset($_SESSION["user_id"]);

?>

<script type="text/javascript">
  alert("You have been logged out.");
  window.location = "/wbd/TugasBesar1_2017/login.php";
</script>
