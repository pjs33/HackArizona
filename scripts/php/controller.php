<?php

	require_once("DatabaseAdaptor.php");

	$model = new DatabaseConnection();

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		if( $model->verifyLogin($username, $password) ) {
			echo "true";
		} else {
			header("location: http://localhost/HackArizona/login.php?failed");
			echo "false";
		}


		if( $model->verifyLogin($username, $password) ) {
			$_SESSION["username"] = $username;
			header("location: http://localhost/");
		} else {
			header("location: http://localhost/HackArizona/login.php?failed");
		}

	} else if( isset($_POST["getPopularIssues"]) ) {

		$scope = $_POST["scope"];

		$popIssueArray = $model->getPopularIssues();

		$jsonArray = json_encode($popIssueArray);

		return $jsonArray;

	}

?>