<?php
    $conn = new mysqli("localhost", "root", "moiseslinar3s", "kenny");
    if ($conn->connect_error) {
        die("ERROR: Unable to connect: " . $conn->connect_error);
    }     
?>