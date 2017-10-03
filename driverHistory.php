<?php 
  include 'connectdb.php';

  include 'getinfo.php'
?>

<!DOCTYPE html>
<html>

<head>
	<title>Order</title>
	<link rel="stylesheet" href="css/history.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/driverHistory.css">
</head>

<body>
	<?php
		include 'history.php';
	?>

	<div class="content">
		<ul id="drivers">
			<?php
				$orderQuery = "SELECT userOrders.id, driver_id, pickup, destination, rating, comment, date, name, picture FROM (SELECT * FROM orders WHERE driver_id = " . $result['id'] . ") as userOrders JOIN users on user_id = users.id";
				$orderResults = $db->query($orderQuery);
				
				while ($order = $orderResults->fetch_assoc()) {
					echo("<li id=" . $order['id'] . ">
								<table>
									<tr>
										<td class='prof-pic'><img src='storage/images/" . $order['picture'] . "'></td>
										<td>
											<ul>
												<li class='date'>" . date('l, F jS Y', strtotime($order['date'])) . "</li>
												<li class='hide-button'><input type='button' value='HIDE' onclick='hideDriver(" . $order['id'] . ");'></li>
												<li class='name'>" . $order['name'] . "</li>
												<li class='location'>" . $order['pickup'] . " - " . $order['destination'] . "</li>
												<li class='rating'>
													gave 
													<span class='stars'>" . $order['rating'] . "</span>
													stars for this order
												</li>
												<li class='comment-header'>and left comment:</li>
												<li class='comment-content'>" . $order['comment'] . "</li>
											</ul>
										</td>
									</tr>
								</table>
								</li>");

				}
			?>
		</ul>
	</div>
</body>

</html>

<script type="text/javascript" src="js/appendqs.js"> </script>
<script>
	function hideDriver(orderId) {
		document.getElementById("drivers").removeChild(document.getElementById(orderId));
	}
</script>