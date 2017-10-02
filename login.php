<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="content">
		<table>
			<tr>
				<th class="line"><hr/></th>
				<th class="login">LOGIN</th>
				<th class="line"><hr/></th>
			</tr>
		</table>
		<div class="form">
			<form method="post">
				Username <input type="text" name="uname"> <br>
				Password <input type="password" name="pass"> <br>
			</form>
		</div>
		<div class="buttons">
				<a href="register.php" >Don't have an account?</a>
				<input type="button" name="login" id="submit-button" value="GO!">
		</div>
	</div>
</body>
</html>

<?php
	include'connectdb.php';
	
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	$valid = true;

	if (($username === "") or ($password === "")) {
		$valid = false;
	}

	if ($valid) {
		$found = false;
		$queryResult = $db->query('SELECT username FROM users');
		while (($validuser = $queryResult->fetch_assoc()) && $valid && !$found) {
			if (($validuser['username'] === $username) and ($validuser['password'] === $password)) {
				$found = true;
			}
		}
		if ($found) {
			$valid = true;
		} else {
			$valid = false;
		}
	}

	if ($valid) {
		$userid = $db->query('SELECT id FROM users WHERE username = ', $username);
		
	} else {
		echo ("Username tidak terdaftar atau password salah")
	}
?>