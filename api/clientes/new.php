<?php

// Conexion
include "../../views/config/conn.php";

// Post 
$post = json_decode(file_get_contents('php://input'), true);

// Query
$query = "INSERT INTO clientes SET 
  razon = '{$post['cliente']['razon']}',  
  documento = '{$post['cliente']['documento']}',  
  direccion = '{$post['cliente']['direccion']}',  
  correo = '{$post['cliente']['correo']}',  
  telefono = '{$post['cliente']['telefono']}',  
  estado = '{$post['cliente']['estado']}'
  ";

// Save Mysql
if ($conn->query($query)){
  echo "true";
}else {
  echo "false";
}