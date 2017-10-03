<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>
	<form id="form" action="/wbd/verification.php" method="POST">
	<div class="box">

		<table>
			<tr>
				<th class="line"><hr/></th>
				<th class="sign-up">SIGN UP</th>
				<th class="line"><hr/></th>
			</tr>
		</table>

		<table class="spaced">
			<tr>
				<td class="text">Your name</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td class="text">Username</td>
				<td>
					<input type="text" name="username" id="username" class="short-textbox" onblur="validateUsername();">
					<label id="username-check"></label>
				</td>
			</tr>
			<tr>
				<td class="text">Email</td>
				<td>
					<input type="email" name="email" id="email" class="short-textbox" onblur="validateEmail();">
					<label id="email-check"></label>
				</td>
			</tr>
			<tr>
				<td class="text">Password</td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td class="text">Confirm Password</td>
				<td><input type="password" name="confirm-password" id="confirm-password"></td>
			</tr>
			<tr>
				<td class="text">Phone Number</td>
				<td><input type="text" name="phone-number" id="phone-number"></td>
			</tr>
		</table>

		<div class="sign-as-driver">
			<input type="hidden" name="sign-as-driver" value=0>
			<input type="checkbox" name="sign-as-driver" id="sign-as-driver" value=1> Also sign me up as a driver!<br>
		</div>

		<div class="already-have-account">
			<a href="/wbd">Already have an account</a>
		</div>

		<div class="register">
			<input type="button" name="register" id="register" value="REGISTER" onclick="validate();">
		</div>

		<div id="errors"></div>
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

	function validate() {
		validateUsername ();
		validateEmail ();

		var errors = "";
		if (document.getElementById("name").value === "") {
			errors += "Name cannot be empty<br>";
		}
		var password = document.getElementById("password").value
		if (password === "") {
			errors += "Password cannot be empty<br>";
		} else {
			if (password !== document.getElementById("confirm-password").value) {
				errors += "Passwords do not match<br>";
			}
		}
		if (document.getElementById("phone-number").value === "") {
			errors += "Phone number cannot be empty<br>";
		}
		document.getElementById("errors").innerHTML = errors;

		if (errors === "" && document.getElementById("username-check").innerHTML === "V" && document.getElementById("email-check").innerHTML === "V") {
			document.getElementById("form").submit();
		} 
	}

</script>

