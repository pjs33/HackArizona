<?php

	require_once("DatabaseAdapter.php");

	if( $_POST["login"] ) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		if( verifyLogin($username, $password) ) {
			$_SESSION["username"] = $username;
		} else {
			header("localhost/login.php?failed");
		}
	} else if() {
		
	}

?>