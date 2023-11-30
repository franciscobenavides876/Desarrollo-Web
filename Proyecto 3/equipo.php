<?php
// Incluye el archivo que contiene la lógica de conexión a la base de datos
include 'conex.inc.php';

// Consulta SQL para seleccionar todos los campos de la tabla "Trabajador"
$sql = "SELECT * FROM Trabajador";

// Ejecuta la consulta
$result = $conn->query($sql);

// Verifica si hay resultados en la consulta
if ($result->num_rows > 0) {
    // Recorre cada fila de resultados
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<div class='Trabajador'>";
        // Muestra el nombre del trabajador
        echo "<h3>Nombre: " . $row["Nombre"] . "</h3>";

        // Muestra el apellido del trabajador
        echo "<p>Apellido: " . $row["Apellido"] . "</p>";

        // Muestra el cargo del trabajador
        echo "<p>Cargo: " . $row["Cargo"] . "</p>";

        // Muestra la descripción del trabajador
        echo "<p>" . $row["Descripcion"] . "</p>";
        echo "</div>";
        echo "</li>";
    }
} else {
    // Si no hay trabajadores, muestra un mensaje indicando que no se encontraron trabajadores
    echo "No se encontraron trabajadores";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
