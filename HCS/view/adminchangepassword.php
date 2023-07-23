<?php 
	require('../Controller/AdminChangePasswordAction.php');
	include('../Controller/header.php');
	include('../Controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<script src="JS/changepassword.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">
</head>
<body>

	


	<div class="change-pass">
		
		<form method="post" action="../Controller/AdminChangePasswordAction.php" novalidate onsubmit="return validate(this);">
			<fieldset>
				<legend>Change Password</legend>
				<label for="uname">Username</label>
				<input type="text" id="uname" name="username" required value="<?php echo $_SESSION['username']; ?>">
				<span id="erroruname"></span>
				<br><br>

				<label for="oldpass">Old Password</label>
				<input type="text" id="oldpass" name="oldpass">
				<span id="erroroldpass"></span>
				<br><br>

				<label for="newpass">New Password</label>
				<input type="text" id="newpass" name="newpass">
				<span id="errornewpass"></span>
				<br><br>

				<input type="submit" name="submit" value="Change Password">
			</fieldset>
		</form>

	</div>

<br><br><br><br><br><br><br><br><br>
	<?php 

		if(isset($_SESSION['pas'])){
			echo $_SESSION['pas'] ;
		}

	?>

</body>
</html>

<?php include('../Controller/footer.php')  ?>