<?php 
  include 'connectdb.php';
  include 'getinfo.php';
  include 'getlocation.php';

?>

<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>

  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/nav.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
</head>


<body>

<?php
	include 'nav.php';
?>

<div class="profileinfo">

    <p id="myprofile">
      My Profile
    </p>

    <a href="/wbd/editprofile.php">
      <img id="editpic" src="storage/images/editpic.png" alt="Edit">  
    </a>
    
</div>

<div class="information">

  <img id="profpic" src="storage/images/<?php echo $result['picture'];?>" alt="Profile Picture">

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
    <a href="/wbd/editpreferred.php">
      <img id="editpic" src="storage/images/editpic.png" alt="Edit">  
    </a>
    
    <ul id="locationlist">
      <?php 
        foreach ($locations as $loc) {
          echo "<li id='location'>" .$loc['location'] . "</li>";
        }
      ?>
    </ul>
</div>

</body>

</html>

<script type="text/javascript" src="js/appendqs.js"> </script>

<script type="text/javascript">
  let lists = document.getElementById('locationlist').childNodes;
    let a = 1;
    let margin = 0;
  lists.forEach(function(lists){
    if(lists.id == "location") {
      lists.style.marginLeft = "" + margin + 'px';
      margin +=40;
    }
  });

</script>