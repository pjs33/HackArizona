<?php

	require_once("DatabaseAdaptor.php");

	$model = new DatabaseConnection();

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];


		if( $model->verifyLogin($username, $password) ) {
			session_start();
			$_SESSION["username"] = $username;
			header("location: http://localhost/HackArizona/");
		} else {
			header("location: http://localhost/HackArizona/login.php?failed");
		}

	} else if( isset($_GET["getPopularIssues"]) ) {

		//$scope = $_POST["scope"];

		$popIssueArray = $model->getPopularIssues("national");

		$jsonArray = json_encode($popIssueArray);

		echo $jsonArray;

	}

?>