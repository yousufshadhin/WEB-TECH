<?php

	include('../Controller/AdminLoginAction.php');
	if(isset($_SESSION['status']))
	{
		echo $_SESSION['status'];
		$_SESSION['status'] = "";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script src="JS/loginvalidation.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<?php 


		if(isset($_SESSION['error'])){
			echo $_SESSION['error'] ;
			$_SESSION['error'] = "";
		}

		if(isset($_SESSION['as'])){
			echo $_SESSION['as'] ;
			$_SESSION['as'] = "";
		}
	 ?>
	<div class="login-form">
	<form method="post" action="../Controller/AdminLoginAction.php" novalidate onsubmit="return validate(this);">
		<fieldset>
			<legend>Login page</legend>
			<label for="username">Username</label>
			<input type="text" name="username" id = "username" value = "abc">
			<span id="errorusername"></span>
			<br><br>
			<label for="password">Password</label>
			<input type="text" name="password" id="password" value = "345">
			<span id="errorpassword"></span>
			<br><br>
			<h3><input type="checkbox" name="remember">Remember me</h3>

			<br><br>
			<input type="submit" name="submit" value="Login">
			<br><br>
			<br><br>
			<p>Don't have an account?</p>
			<a href="adminregistration.php">Click here for Sign up!</a>
		</fieldset>
	</form>
	</div>
</body>
</html>
