<?php 

	// Conn
	include '../../views/config/conn.php';

	// get Post
	$data = json_decode(file_get_contents("php://input"), TRUE);

	echo json_encode($data);

?>