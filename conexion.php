<?php
// Cambia estos valores según tu base de datos
$servername = "localhost"; // o el nombre de tu servidor
$username = "tu_usuario"; // tu nombre de usuario
$password = "tu_contraseña"; // tu contraseña
$dbname = "nombre_de_la_base_de_datos"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
