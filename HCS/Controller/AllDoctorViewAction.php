<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getalldoctor();

	if(isset($_SESSION['info'])){
		header("Location: ../view/alldoctorview.php");
	}














?>