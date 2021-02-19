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



echo json_encode($items_array);

if ($conn->query($query_header)){
    $items_array = Array();
    foreach ($data['producto']['items'] as $item ){
        $query_productos = "INSERT INTO productos SET 
        descripcion = '{$item['descripcion']}',
        unidad = '{$item['unidad']}',
        descuento = '{$item['descuento']}',
        estado = '{$item['estado']}',
        precio_unitario_sin_igv = '{$item['precio_unitario_sin_igv']}',
        precio_unitario_igv = '{$item['precio_unitario_igv']}',
        precio_unitario_total = '{$item['precio_unitario_con_igv']}'
    ";
        $conn->query($query_productos);

        array_push($items_array,$item);
    }
    echo 'true';
}else{
    echo 'false';
}

//echo json_encode($data['producto']);