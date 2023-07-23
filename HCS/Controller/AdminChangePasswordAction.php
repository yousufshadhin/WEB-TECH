
<?php

	require('../model/User.php');

	session_start();

	include('authentication.php');
	
	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$password = test_input($_POST['oldpass']);
		$newpass = test_input($_POST['newpass']);

		$message = "";
		if(empty($username)){
				$message .= "Fillup username";
				$message .= "<br>";
			}

		if(empty($password)){
			$message .= "Fillup old password";
			$message .= "<br>";
		}

		if(empty($newpass)){
			$message .= "Fillup new password";
			$message .= "<br>";
		}

		if($message == ""){
			
			$check = passwordchange($_SESSION['username'], $password, $newpass);
			if($check){
				$_SESSION['pas'] = "Password updated";
				header("Location: ../view/adminchangepassword.php");
			}
			else{
				$_SESSION['pas'] = "Try again later";
				header("Location: ../view/adminchangepassword.php");
			}
		}
		else{
			echo "$message";
		}	
	}

?>