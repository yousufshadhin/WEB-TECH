<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getallpatient();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allpatientview.php");
	}














?>