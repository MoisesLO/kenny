<?php

// Conn
include '../../views/config/conn.php';

$id = $_GET['id'];


$query = "select * from empresas where id = $id";
$query = $conn->query($query)->fetch_all(MYSQLI_ASSOC);

echo json_encode($query);

?> 