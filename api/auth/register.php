<?php
	$data = json_decode(file_get_contents("php://input"), TRUE);	
	echo json_encode( $data );
?>