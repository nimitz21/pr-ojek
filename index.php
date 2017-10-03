<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
	<div class="content">
		<table>
			<tr>
				<th class="line"><hr class="dgcolor"/></th>
				<th class="login dgcolor">LOGIN</th>
				<th class="line"><hr class="dgcolor"/></th>
			</tr>
		</table>
		<div class="form">
			<form method="POST" action="/wbd/validateLogin.php">
				<table>
					<tr>
						<td class="dgcolor text">Username </td> 
						<td class="wide"><input type="text" name='uname'></td>
					</tr>
					<tr>
						<td class="dgcolor text">Password</td> 
						<td class="wide"><input type="password" name='pass'></td>
					</tr>
				</table>
				<a href="register.php" class="register">Don't have an account?</a>
				<div class="buttons">
					<input type="submit" name="login" id="submit-button" value="GO!">
				</div>
			</form>
		</div>
		<?php 
			if (isset($_GET['errorcode'])) {
				if ($_GET['errorcode'] == 1) {
					echo "Username tidak terdaftar atau password salah";
				}
			}
		?>
	</div>
</body>
</html>