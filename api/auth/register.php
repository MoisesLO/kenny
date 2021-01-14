<?php

	include '../../views/config/conn.php';

	$data = json_decode(file_get_contents("php://input"), TRUE);	
	// echo json_encode( $data );

	$registros = "INSERT INTO users (nombres,apellidos,correo,password) VALUES (
		'{$data['registro']['nombres']}',
		'{$data['registro']['apellidos']}',
		'{$data['registro']['correo']}',
		'{$data['registro']['password']}')		
		";
	
	if($conn->query($registros)){
		echo "true";
	}else{
		echo "false";
	}
    
    // $registros = $conn->query($registros)->fetch_all(MYSQLI_ASSOC);
    // mysqli_query($conn, $registros)

	// print_r($registros);
	
	

	
	
?>