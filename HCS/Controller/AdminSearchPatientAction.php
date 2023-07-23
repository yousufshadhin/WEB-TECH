<?php  

	require('../model/User.php');
	session_start();
	include('authentication.php');

	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test_input($_POST['username']);

			$message = "";
			if(empty($username)){
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				$_SESSION['searchpatient'] = searchpatient($username);

				if(isset($_SESSION['searchpatient'])){
					$_SESSION['flagp']=true;
					header("Location: ../view/searchpatient.php");
				}
			}
			else
			{
				$_SESSION['errordatap'] = $message;
				header("Location: ../view/searchpatient.php");
			}
	}

?>