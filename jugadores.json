<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "gdps_alexphgdps"; // Tu usuario
$password = "x3ndg6xi1k9kwe3gackj5e"; // Tu contraseña
$dbname = "nombre_de_tu_base_de_datos"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener todos los jugadores
$sql = "SELECT * FROM jugadores"; // Cambia esto al nombre de tu tabla de jugadores
$result = $conn->query($sql);

// Array para almacenar los jugadores
$jugadores = [];

if ($result->num_rows > 0) {
    // Almacenar datos de cada fila en el array
    while ($row = $result->fetch_assoc()) {
        $jugadores[] = $row;
    }
}

// Cerrar conexión
$conn->close();

// Guardar los datos en un archivo JSON
file_put_contents('jugadores.json', json_encode($jugadores));
?>
