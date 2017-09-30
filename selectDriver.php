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
	<link rel="stylesheet" href="css/selectDriver.css">
</head>

<body>
	<?php
		include 'order.php';
	?>

	<?php
		include 'getDriver.php';
	?>

	<div class="content">
		<div class="content-header">
			Preferred Drivers:
			<ul>
				<li>
					
				</li>
			</ul>
		</div>
		<div class="content-body">
		</div>
	</div>

	<div class="content">
		<div class="content-header">
			Other Drivers:
		</div>
		<div clas="content-body">
		</div>
	</div>
	
</body>
</html>

<script>
	
</script>