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
	<title>Manage Patient</title>
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">
</head>
<body>

	<br><br><br><br><br><br><br><br>
	
	<h1>Welcome to Patient Page</h1>
	<br><br>

	<a href="../Controller/AllPatientViewAction.php">Book Appoinment</a>s
	<br><br>
	
	<a href="admindashboard.php">Goto Homepage</a>
	<br><br>
	
	<br><br>
	<a href="searchpatient.php"></a>
	<br><br>

</body>
</html>

<?php include('../Controller/footer.php')  ?>