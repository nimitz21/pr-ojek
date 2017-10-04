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
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
</head>
<body>
   <div class="editprofileplaceholder">
      <p id="editprofile">
        EDIT PROFILE INFORMATION
      </p>
      <form action="submitprofile.php" method="POST" enctype="multipart/form-data">
        <fieldset class="row">
          <img id='profpic' src="storage/images/<?php echo $result['picture']; ?>" alt="">
          <div id="updateprofile">
            Update profile picture
          </div>
          <input type="file" name="profilepicture" id="profilepicture">
        </fieldset>
        <fieldset class="row">
          <fieldset class="rowa">
            <p id="yourname">Your Name</p>
            <input type="text" name="name" id="name" value="<?php echo $result['name']; ?>">  
          </fieldset>
          <fieldset class="rowa">
            <p id="phone">Phone</p>
            <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $result['phonenumber']; ?>">            
          </fieldset>
          <fieldset class="rowa">
            <p id="statusdriver">Status Driver</p>  
            <label class="switch">
              <input type="hidden" name="isdriver" value=0>
              <input type="checkbox" name="isdriver" id="isdriver" value=1 
                <?php 
                  if($result['isdriver'] == 1) {
                    echo "checked";
                  } 
                ?>
              >
              <span class="slider round"></span>
            </label>
          </fieldset>
        </fieldset>
        <button type="submit" id="submitprofile">Save</button>
      </form>
      <a href="profile.php">
        <button id="back">
          Back
        </button>
      </a> 
      
    </div>
</body>
</html>
<script type="text/javascript" src="js/appendqs.js"></script>