<?php

	$servername = "127.0.0.1:3306";
	$username = "root";
	$password = "1234";
	$dbname = "apna_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>