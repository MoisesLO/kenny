<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $conn = new mysqli("localhost", "root", "", "kenny");
    if ($conn->connect_error) {
        die("ERROR: Unable to connect: " . $conn->connect_error);
    } 

    $registros = "INSERT INTO users (nombres) VALUES ('linares')";
    // $registros = $conn->query($registros)->fetch_all(MYSQLI_ASSOC);
    $conn->query($registros);
    // mysqli_query($conn, $registros)

    // print_r($registros);
?>