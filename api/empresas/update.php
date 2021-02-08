<?php

// Conexion
include "../../views/config/conn.php";

// Get Post
$data = json_decode(file_get_contents("php://input"), true);

$sql = "UPDATE empresas SET 
  razon = '{$data['empresa']['razon']}',
  documento = '{$data['empresa']['documento']}',
  direccion = '{$data['empresa']['direccion']}',
  correo = '{$data['empresa']['correo']}',
  telefono = '{$data['empresa']['telefono']}',
  estado = '{$data['empresa']['estado']}'  
";

if($conn->query($sql)){
  echo "true";
}else{
  echo "false";
}