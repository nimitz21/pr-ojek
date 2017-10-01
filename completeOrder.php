<?php 
  include 'connectdb.php';

  $_SESSION["user_id"] = 1;

  include 'getinfo.php'
?>

<!DOCTYPE html>
<html>

<head>
	<title>Order</title>
	<link rel="stylesheet" href="css/order.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/completeOrder.css">
</head>

<body>
	<?php
		include 'order.php';
		include 'getDriverInfo.php';
	?>

	<?php echo($_POST['pickup']) ?>

	<div class="content">
		<form id="form" action="/wbd/orderDone.php" method="POST">
		
		<input type="hidden" name="pickup" value="<?php echo(htmlspecialchars($_POST['pickup']));?>">
		<input type="hidden" name="destination" value="<?php echo(htmlspecialchars($_POST['destination']));?>">
		<input type="hidden" name="driver" id="driver" value="<?php echo(htmlspecialchars($driverId));?>">

		<div class="content-header">
			HOW WAS IT?
		</div>

		<div class="driver-info">
		<ul>
			<li class="profile-pic"></li>
			<li class="username">@<?php echo($driver['username'])?></li>
			<li class="name"><?php echo($driver['name'])?></li>
			<li class="rating">
				<span id="1-star" onclick="rate(1);">&#9734</span>
				<span id="2-star" onclick="rate(2);">&#9734</span>
				<span id="3-star" onclick="rate(3);">&#9734</span>
				<span id="4-star" onclick="rate(4);">&#9734</span>
				<span id="5-star" onclick="rate(5);">&#9734</span>
				<input type="hidden" name="rating" id="rating" value=0>
			</li>
		</ul>
		</div>

		<div class="coment">
			<input type="text" name="comment" id="comment" placeholder="Your comment...">
		</div>

		<div class="complete-order">
			<input type="submit" name="complete" id="complete" value="COMPLETE ORDER">
		</div>
		</form>
	</div>
</body>

</html>

<script>
	function rate(rating) {
		for (i = 1; i <= rating; ++i) {
			document.getElementById(i + "-star").innerHTML = "&#9733";
		}
		for (i = rating + 1; i <= 5; ++i) {
			document.getElementById(i + "-star").innerHTML = "&#9734";
		}
		document.getElementById("rating").value = rating;
	}
</script>