<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getallacc();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allaccview.php");
	}














?>