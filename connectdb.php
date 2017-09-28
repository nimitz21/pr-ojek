<?php 
$server = "localhost";
$username = "root";
$password = "";

$db = new mysqli($server, $username, $password, "wbd");

if($db->connect_error) {
  die ("Connection to Database Failed : " . $db->connect_error);
} else {
}

?>