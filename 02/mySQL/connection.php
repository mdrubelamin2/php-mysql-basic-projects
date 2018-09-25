<?php

	$server		=	"localhost";
	$username	=	"root";
	$password	=	"";
	$db			=	"my_first_database";

	// Create a Connection
	$conn = mysqli_connect($server, $username, $password, $db);

	// Check Connection
	if (!$conn) {
		# code...
		die("Connection Failed: ". mysqli_connect_error());
	}

	// echo "Connected Successfully!";

?>