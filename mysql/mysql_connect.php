<?php
	$host = "ddnb.info";
	$login = "blogx";
	$password = "whoamI";
	$database = "blogx";
	$con=mysqli_connect($host, $login, $password, $database);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_close($con);
?>
