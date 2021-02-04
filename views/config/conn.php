<?php
    $conn = new mysqli("localhost", "root", "", "kenny");
    if ($conn->connect_error) {
        die("ERROR: Unable to connect: " . $conn->connect_error);
    }     
?>