<?php 
  include 'connectdb.php';
  session_start();
  include 'getinfo.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Location</title>
  <link rel="stylesheet" href="css/editprofile.css">
</head>
<body>
   <div class="editprofileplaceholder">
      <p id="editprofile">
        Edit Profile
      </p>
      <form action="submitprofile.php" method="POST" enctype="multipart/form-data">
        <fieldset class="row">
          <img id='profpic' src="storage/images/<?php echo $result['picture']; ?>" alt="">
          <p>
            Update profile picture
          </p>
          <input type="file" name="profilepicture" id="profilepicture">
        </fieldset>
        <fieldset>
          
        </fieldset>
      </form>
      
    </div>
</body>
</html>