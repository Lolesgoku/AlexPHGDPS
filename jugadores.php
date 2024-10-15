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

// HTML para mostrar los jugadores
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores de AlexPHGPDS</title>
    <link rel="stylesheet" href="styles.css"> <!-- Estilo CSS si lo necesitas -->
</head>
<body>

<header>
    <h1>Lista de Jugadores</h1>
</header>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th> <!-- Cambia esto si necesitas más campos -->
            <th>Fecha de Registro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Mostrar datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["correo"] . "</td>
                        <td>" . $row["fecha_registro"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay jugadores registrados.</td></tr>";
        }
        ?>
    </tbody>
</table>

<footer>
    <p>&copy; 2024 AlexPHGPDS. Todos los derechos reservados.</p>
</footer>

</body>
</html>

<?php
// Cerrar conexión
$conn->close();
?>
