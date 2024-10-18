<?php
include 'conexion.php'; // Esto incluye el archivo de conexión

$sql = "SELECT id, nombre, estrellas, top FROM jugadores"; // Cambia 'jugadores' por el nombre de tu tabla
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si hay resultados, los muestra
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Estrellas: " . $row["estrellas"]. " - Top: " . $row["top"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
