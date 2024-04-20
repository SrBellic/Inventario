<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deisanarte_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
