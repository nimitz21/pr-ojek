<?php 
  include 'connectdb.php';
  $actid = $_GET["activeid"];

  $query = "SELECT * FROM users WHERE ID=" . $actid;
  $results = $db->query($query);

  if($results->num_rows > 0) {
    $user = $results->fetch_assoc();
  }

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $isdriver = $_POST['isdriver'];

    if (is_uploaded_file($_FILES['profilepicture']['tmp_name'])) { 
      $uploaddir = "storage/images/";

      $temp = explode(".", $_FILES["profilepicture"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);

      if (move_uploaded_file($_FILES['profilepicture']['tmp_name'], $uploaddir . $newfilename)) {
        if($user['picture'] != "default.jpg") {
          unlink("storage/images/". $user['picture']);   
        }
        $db->query('UPDATE users SET picture="'. $newfilename . '" WHERE id=' . $actid);
      } else {
      }

    }
    $db->query('UPDATE users SET name="'. $name .'" ,phonenumber="'.$phonenumber.'" ,isdriver='.$isdriver .' WHERE id=' . $actid);

  }
 ?>

 <script type="text/javascript">
  let querystring = window.location.search;
  window.location = "/wbd/editprofile.php" + querystring;
 </script>