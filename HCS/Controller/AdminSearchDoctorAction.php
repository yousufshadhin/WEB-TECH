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
				$_SESSION['searchnurse'] = searchdoctor($username);

				if(isset($_SESSION['searchnurse'])){
					$_SESSION['flag']=true;
					header("Location: ../view/searchdoctor.php");
				}
			}
			else
			{
				$_SESSION['errordata'] = $message;
				header("Location: ../view/searchdoctor.php");
			}
	}

?>