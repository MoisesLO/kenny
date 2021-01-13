<?php

	include '../../views/config/conn.php';

	$registros = "INSERT INTO users (nombres) VALUES ('oscco')";
    // $registros = $conn->query($registros)->fetch_all(MYSQLI_ASSOC);
    $conn->query($registros);
    // mysqli_query($conn, $registros)

	// print_r($registros);
	
	// $data = json_decode(file_get_contents("php://input"), TRUE);	
	// echo json_encode( $data );

	
	
?>