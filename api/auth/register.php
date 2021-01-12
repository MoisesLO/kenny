<?php

	$conn = new mysqli("localhost", "root", "", "kenny");
	if ($conn->connect_error) {
		die("ERROR: Unable to connect: " . $conn->connect_error);
	} 

	$insert	= "INSERT INTO users (nombres) VALUES ('moises)";
	$conn->query($insert);
	// $data = json_decode(file_get_contents("php://input"), TRUE);	
	// echo json_encode( $data );

	
	
?>