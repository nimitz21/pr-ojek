<?php 
  include 'connectdb.php';

  include 'getinfo.php'
?>

<!DOCTYPE html>
<html>

<head>
	<title>Order</title>
	<link rel="stylesheet" href="css/order.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/selectDestination.css">
</head>

<body>
	<?php
		include 'order.php';
	?>

	<div class="content">
		<form id="form" action="/wbd/selectDriver.php" method="POST">
		<table>
			<tr>
				<td class="header-form">Picking point</td>
				<td><input type="text" name="picking-point" id="picking-point"></td>
			</tr>
			<tr>
				<td class="header-form">Destination</td>
				<td><input type="text" name="destination" id="destination"></td>
			</tr>
			<tr>
				<td class="header-form">Preferred Driver</td>
				<td><input type="text" name="preferred-driver" placeholder="(optional)"></td>
			</tr>
		</table>

		<div class="next">
			<input type="button" name="next" value="NEXT" onclick="nextStep();">
		</div>

		</form>
	</div>
</body>
</html>

<script type="text/javascript" src="js/appendqs.js"> </script>
<script>
	function nextStep() {
		if (document.getElementById("picking-point").value !== "" && 
			document.getElementById("destination") !== "") {
			document.getElementById("form").submit();
		}
	}
</script>