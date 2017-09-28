<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<form action="/register.php" method="POST">
	<div class="box">

		<table>
			<tr>
				<th class="line"><hr/></th>
				<th class="sign-up">SIGN UP</th>
				<th class="line"><hr/></th>
			</tr>
		</table>

		<table>
			<tr>
				<td>Your name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" id="username" class="short-textbox" onblur="validateUsername();">
					<label id="username-check"></label>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" id="email" class="short-textbox" onblur="validateEmail();">
					<label id="email-check"></label>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="confirm-password"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="number" name="phone-number"></td>
			</tr>
		</table>

		<div class="sign-as-driver">
			<input type="checkbox" name="sign-as-driver"> Also sign me up as a driver!<br>
		</div>

		<div class="already-have-account">
			<a href="/login.php">Already have an account</a>
			<button type="submit" name="register">REGISTER </button>
		</div>

	</div>
	</form>
</body>
</html>

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

	function validateUsername() {
		var request = getXmlHttpRequest();

		var url = "validateUsername.php";
		var username = document.getElementById("username").value;
		var vars = "username=" + username;
		request.open("POST", url, true);

		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var return_data = request.responseText;
				document.getElementById("username-check").innerHTML = return_data;
			}
		}

		request.send(vars);
	}

	function validateEmail() {
		var request = getXmlHttpRequest();

		var url = "validateEmail.php";
		var emailaddress = document.getElementById("email").value;
		var vars = "email=" + emailaddress;
		request.open("POST", url, true);

		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var return_data = request.responseText;
				document.getElementById("email-check").innerHTML = return_data;
			}
		}

		request.send(vars);
	}

</script>

