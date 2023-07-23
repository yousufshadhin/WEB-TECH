<?php 

	require 'Connect.php';
	function Checklogin($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}


	function getAll() {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM admininfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}


	function getalldoctor()
	{
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM doctorinfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function getallacc()
	{
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM accountant";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function getallpatient(){
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM patientinfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){
			$sql = "UPDATE `admininfo` SET `password` = '$newpass' WHERE username = '" . $username . "' and password = '" . $oldpass . "'";
			mysqli_query($conn, $sql);

			return true;
		}

		return false;
	}

	function updateprofile($add, $mail, $ph, $qu, $wo, $uname){
		$conn = connect();

		if($conn){
			$sql = "UPDATE `admininfo` SET `address` = '$add' , `email` = '$mail' , `phone` = '$ph' , `qua` = '$qu' , `work` = '$wo' WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		else{
			return false;
		}
	}


	function viewprofile($username, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	function registration($fname , $lname , $gen, $db, $blood, $add, $e, $ph, $qu, $wor, $user, $pass, $rol){
		$conn = connect();
		if($conn){
			$stmt = $conn->prepare("Insert INTO admininfo (firstname , lastname , gender, dob, bg, address, email, phone, qua, work, username, password, role ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssssssssss", $firstname , $lastname , $gender, $dob, $bg, $address, $email, $phone, $qua, $work, $username, $password, $role);

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$dob = $db;
			$bg = $blood;
			$address = $add;
			$email = $e;
			$phone = $ph;
			$qua = $qu;
			$work = $wor;
			$username = $user;
			$password = $pass;
			$role = $rol;
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}


	function search($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role FROM admininfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searcha'] = "No data found";
				$_SESSION['fl'] = false;
				/*header("Location: ../view/adminsearch.php");*/
			}
		}
		//return array();
	}



	function searchdoctor($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua FROM doctorinfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searchnurse'] = "No data found";
				$_SESSION['flag'] = false;
				header("Location: ../view/searchdoctor.php");
			}
		}
		//return array();
	}

	function searchacc($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , dob, username FROM accountant WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['errordatap'] = "No data found";
				$_SESSION['flag'] = false;
				header("Location: ../view/searchacc.php");
			}
		}
		//return array();
	}


	function searchpatient($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, username FROM patientinfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searchpatient'] = "No data found";
				$_SESSION['flagp'] = false;
				header("Location: ../view/searchpatient.php");
			}
		}
		//return array();
	}













?>