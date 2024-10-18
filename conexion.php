<?php
// Cambia estos valores según tu base de datos
$servername = "sftp.fhgdps.com"; // o el nombre de tu servidor
$username = "gdps_alexphgdps"; // tu nombre de usuario
$password = "x3ndg6xi1k9kwe3gackj5e"; // tu contraseña
$dbname = "gdps_alexphgdps"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
