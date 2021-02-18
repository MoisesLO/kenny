<?php

// Conexion
include "../../views/config/conn.php";

// Get Post
$data = json_decode(file_get_contents("php://input"), TRUE);

// Query
$query_header = "INSERT INTO header_productos SET
            nombre = '{$data['producto']['nombre']}',
            stock = '{$data['producto']['stock']}',
            estado = '{$data['producto']['estado']}'
            ";

$items_array = Array();
foreach ($data['producto']['items'] as $item ){
   array_push($items_array,$item);
}

echo json_encode($items_array);

//if ($conn->query($query_header)){
//    $query_productos = "INSERT INTO productos SET
//
//    ";
//    echo 'true';
//}else{
//    echo 'false';
//}

//echo json_encode($data['producto']);