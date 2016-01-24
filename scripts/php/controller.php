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

	} else if( isset($_POST["getPopularIssues"]) ) {

		$scope = $_POST["scope"];

		$popIssueArray = $model->getPopularIssues($scope);

		$jsonArray = json_encode($popIssueArray);

		echo $jsonArray;

	} else if( isset($_POST["support-issue"]) ) {
		
		$username = $_SESSION("username");

		
	}

?>