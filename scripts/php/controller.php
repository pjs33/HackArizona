<?php

	require_once("DatabaseAdapter.php");

	$model = new DatabaseAdapter();

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		if( $model->verifyLogin($username, $password) ) {
			$_SESSION["username"] = $username;
			header("localhost/")
		} else {
			header("localhost/HackArizona/login.php?failed");
		}

	} else if( isset($_POST["getPopularIssues"]) ) {

		$scope = $_POST["scope"];

		$popIssueArray = $model->getPopularIssues();

		$jsonArray = json_encode($popIssueArray);

		return $jsonArray;

	}

?>