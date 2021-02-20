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





if ($conn->query($query_header)) {

  // Obtiene el ultimo insert de conn
  $idQueryHeader = $conn->insert_id;

  $items_array = array();
  foreach ($data['producto']['items'] as $item) {

    $query_productos = "INSERT INTO productos SET 
      descripcion = '{$item['descripcion']}',
      unidad = '{$item['unidad']}',
      descuento = '{$item['descuento']}',
      estado = '{$item['estado']}',
      precio_unitario_sin_igv = '{$item['precio_unitario_sin_igv']}',
      precio_unitario_igv = '{$item['precio_unitario_igv']}',
      precio_unitario_total = '{$item['precio_unitario_con_igv']}',
      header_producto_id = '{$idQueryHeader}'
    ";
    $conn->query($query_productos);

    array_push($items_array, $item);
  }
  echo 'true';
} else {
  echo 'false';
}

// echo json_encode($items_array);

//echo json_encode($data['producto']);