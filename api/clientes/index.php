<?php 

// Conexion
include "../../views/config/conn.php";

// Query
$query = "select * from clientes";
$query = $conn->query($query)->fetch_all(MYSQLI_ASSOC);

for($i=0; $i < count($query);$i++){
    $query[$i]['open'] = false;    
}

echo json_encode($query);