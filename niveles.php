<?php
include 'conexion.php'; // Incluye el archivo de conexión

$sql = "SELECT id, nombre, creador FROM niveles"; // Cambia 'niveles' por el nombre de tu tabla
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si hay resultados, los muestra
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Creador: " . $row["creador"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
