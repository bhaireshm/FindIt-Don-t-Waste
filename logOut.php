<?php
include('dbConnection.php');

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.html");
	}

?>