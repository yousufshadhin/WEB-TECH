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
				

				$_SESSION['searchacc'] = searchacc($username);

				if(isset($_SESSION['searchacc'])){
					$_SESSION['flagp']=true;
					header("Location: ../view/searchacc.php");
				}
			}
			else
			{
				
				$_SESSION['errordatap'] = $message;
				header("Location: ../view/searchacc.php");
			}
	}

?>