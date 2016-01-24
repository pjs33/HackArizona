<?php

if( $_SESSION["username"] == "" ) {
	header("location: http://localhost/HackArizona/login.php");
}

?>