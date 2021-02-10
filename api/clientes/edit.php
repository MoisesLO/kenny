<?php 

include '../../views/config/conn.php';

$id = $_GET['id'];

$query = "select * from clientes where id = $id";

$query = $conn->query($query)->fetch_array(MYSQLI_ASSOC);

echo json_encode($query);