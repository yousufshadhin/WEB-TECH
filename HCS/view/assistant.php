<?php
	require('../Controller/AdminLoginAction.php');
	require('../Controller/header.php');
	include('../Controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">
</head>
<body>

	<br><br><br><br><br><br><br><br>
	<h1>Welcome to Doctor Assistant Page</h1>
	<br><br>
	<a href="../Controller/AllDoctorViewAction.php">Manage Appoinment</a>
	<br><br>
	
	<a href="admindashboard.php">Goto Homepage</a>
	<br><br>

	<br><br>

</body>
</html>

<?php include('../Controller/footer.php')  ?>