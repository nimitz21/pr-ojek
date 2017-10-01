<?php 
  include 'connectdb.php';
  session_start();

  $_SESSION["user_id"] = 1;

  include 'getinfo.php';
  include 'getlocation.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>

  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/nav.css">
</head>


<body>

<<<<<<< HEAD
<div class="nav-header">

  <ul class="header">

    <li class="nav-title">

      <p id="projek">
        <span id="pr">
          PR
        </span>-
        <span id="ojek">
          OJEK
        </span>
      </p>

      <p id="hi-uname">Hi, <?php echo $result['username']; ?> </p>

    </li>

    <li class="nav-description">

      <p id="wush">
        wush... wush... ngeeeeengg...
      </p>

      <a href="/wbd/TugasBesar1_2017/logout.php" class="logout-link">
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

=======
<?php
	include 'nav.php';
?>
>>>>>>> ab64f80760afbd4dcd473fa4eee5fee8535d829d

<div class="profileinfo">

    <p id="myprofile">
      My Profile
    </p>

    <a href="/wbd/TugasBesar1_2017/editprofile.php">
      <img id="editpic" src="storage/images/editpic.png" alt="Edit">  
    </a>
    
</div>

<div class="information">

  <img id="profpic" src="storage/images/profpic.jpg" alt="Profile Picture">

  <p id="user-info">
    @<?php echo "<b>" . $result['username'] . "</b>" ; ?>
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
    | 
    <span id="rating">
    <img src="storage/images/star.png" alt="star" id="starpic">
    <?php echo number_format($rating['avgrate'],1); ?>
    </span> 
    <?php echo "(" .  $rating['votes'] . " Votes)"; ?>
    <br>
    <img src="storage/images/mail.png" alt="mail" id="mailpic">
    <?php echo $result['email']; ?>
    <br>  
    <img src="storage/images/phone.png" alt="Phone" id="phonepic">
    <?php echo $result['phonenumber']; ?>
  </p>
</div>

<div class="locations">
    <p id="preffered-location">
      Preferred Locations
    </p>
    <a href="/wbd/TugasBesar1_2017/editlocation.php">
      <img id="editpic" src="storage/images/editpic.png" alt="Edit">  
    </a>
    
    <ul>
      <?php 
        foreach ($locations as $loc) {
          echo "<li id='location'>" .$loc['location'] . "</li>";
        }
      ?>
    </ul>
</div>




</body>

</html>