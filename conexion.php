<?php 
$servername = "localhost:3307";
$username = "root";
$password = "usbw";
$dbname = "i19";

// Crear conexion
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check conexion
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>