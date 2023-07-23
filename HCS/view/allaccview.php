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
	<title>View Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/background.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">
</head>
<body>



		<div align="center">
			<br><br><br><br><br><br><br><br>

			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				
				echo "<th>Date of Birth</th>";
				
				echo "<th>Username</th>";
				echo "<th>Type</th>";
				
				echo "</tr>";
				for($i=0; $i<sizeof($x);$i++)
				{
					echo "<tr>";
					echo "<td>" . $x[$i]['firstname'] . "</td>";
					echo "<td>" . $x[$i]['lastname'] . "</td>";
					
					echo "<td>" . $x[$i]['dob'] . "</td>";
					
					echo "<td>" . $x[$i]['username'] . "</td>";
					echo "</tr>";
				}


			echo "</table>";

			echo "<br><br>";


			
			?>

		

			<br><br>
			<a href="searchacc.php">Search Accountant</a>
			<br><br>
			<a href="manageacc.php">Go Back</a>
			<br>

		</div>


</body>
</html>

<?php 
	include('../Controller/footer.php');
?>