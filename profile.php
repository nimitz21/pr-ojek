<?php 
  include 'connectdb.php';

  $_SESSION["user_id"] = 1;

  include 'getuser.php'
?>

<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>

  <link rel="stylesheet" href="css/profile.css">
</head>


<body>

  <div class="nav-header">
    <ul class="header">
      <li class="nav-title">
        <p id="titlenav">
          <span id="pr">
            PR
          </span>-
          <span id="ojek">
            OJEK
          </span>
        </p>

        <p id="nav-uname">Hi, <?php echo $result['name']; ?> </p>
      </li>

      <li class="nav-description">
        <p id="nav-desc">
          wush... wush... ngeeeeengg...
        </p>
        <a href="/logout.php" class="logout-link">
          Logout
        </a>

      </li>
    </ul>
  </div>
<div class="nav-body">
  <ul class="navigation">
    <li id="order">
      <a href="/order.php">ORDER</a>
    </li>
    <li id="history">
      <a href="/history.php">HISTORY</a>
    </li>
    <li id="profile">
      <a href="/profile.php">MY PROFILE</a>
    </li>
  </ul>
</div>


<div class="profile">
    <p id="myprofile">
      My Profile
    </p>
    <a href="/editprofile.php">
      <img id="editpic" src="storage/images/editpic.jpg" alt="Edit">  
    </a>
    
</div>

<div class="information">
  <img id="profpic" src="storage/images/profpic.jpg" alt="Profile Picture">
  <p id="user-info">
    @<?php echo $result['username']; ?>
    <br>
    <?php echo $result['name']; ?>
    <br>
    <?php 
      if($result['isdriver'] === 0) {
        echo "Non-Driver";
      } else {
        echo "Driver";
      }
    ?>
    | * <?php echo number_format($rating['avgrate'],1); ?> 
    <?php echo "(" .  $rating['votes'] . " Votes)"; ?>
    <br>
    <?php echo $result['email']; ?>
    <br>  
    <?php echo $result['phonenumber']; ?>
  </p>
</div>

<div class="preffered-locations">
    <p id="myprofile">
      Preferred Locations
    </p>
    <a href="/editlocation.php">
      <img id="editpic" src="storage/images/editpic.jpg" alt="Edit">  
    </a>
    
    <ul>
      <li>Medan</li>
      <li>Pekan Baru</li>
      <li>  Jkarta</li>
      <li>sdfsdaf</li>
    </ul>
</div>




</body>

</html>