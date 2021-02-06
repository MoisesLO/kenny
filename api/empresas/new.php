<?php 

	// Conn
	include '../../views/config/conn.php';

	// get Post
	$data = json_decode(file_get_contents("php://input"), TRUE);

	// Query
    $documento = "INSERT INTO empresas SET 
      razon = '{$data['empresa']['razon']}',
      documento = '{$data['empresa']['documento']}',
      direccion = '{$data['empresa']['direccion']}',
      correo = '{$data['empresa']['correo']}'         
    ";
	
	if($conn->query($documento)){
		echo "true";
	}else{
		echo "false";
	}

	// echo json_encode($data);

?>