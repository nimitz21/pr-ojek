<?php 
$server = "localhost";
$uname = "root";
$pword = "";

$db = new mysqli($server, $uname, $pword, "wbd");

if($db->connect_error) {
  die ("Connection to Database Failed : " . $db->connect_error);
} else {

}

?>