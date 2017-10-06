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
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
</head>

<body>
	<?php
		include 'history.php';
	?>

	<div class="content">
		<ul id="drivers">
			<?php
				$orderQuery = "SELECT userOrders.id, driver_id, pickup, destination, rating, comment, date, name, picture FROM (SELECT * FROM orders WHERE driver_id = " . $result['id'] . " and hidden_by_driver = 0) as userOrders JOIN users on user_id = users.id";
				$orderResults = $db->query($orderQuery);
				
				while ($order = $orderResults->fetch_assoc()) {
					echo("<li id=" . $order['id'] . ">
								<table>
									<tr>
										<td class='prof-pic'><img src='storage/images/" . $order['picture'] . "'></td>
										<td>
											<ul>
												<li class='date'>" . date('l, F jS Y', strtotime($order['date'])) . "</li>
												<li class='hide-button'><input type='button'  class='hide-button' value='HIDE' onclick='hideOrder(" . $order['id'] . ");'></li>
												<li class='name'><b>" . $order['name'] . "</b></li>
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
	function getXmlHttpRequest() {
		var request;
		try {
			request = new XMLHttpRequest();
		} catch (tryMicrosoft) {
			try {
				request = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (otherMicrososft) {
				try {
					request = new ActiveXObject("MicrosoftXMLHTTP");
				} catch (failed) {
					request = null;
				}
			}
		}
		return request;
	}

	function hideOrder(orderId) {
		var request = getXmlHttpRequest();
		var url = "/wbd/hideOrder.php";
		var vars = "orderId=" + orderId + "&hider=driver";

		request.open("POST", url, true);

		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		request.onreadystatechange = function() {
			document.getElementById("drivers").removeChild(document.getElementById(orderId));
		}

		request.send(vars);
	}
</script>