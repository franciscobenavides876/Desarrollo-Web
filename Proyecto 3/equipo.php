<?php
include 'conex.inc.php';

$sql = "SELECT * FROM Trabajador";
    
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
            echo "<div class='Trabajador'>";
            echo "<h3>Nombre: " .$row["Nombre"]. "</h3>";

            echo "<p>Apellido: " .$row["Apellido"]. "</p>";
            echo "<p>Cargo: " .$row["Cargo"]. "</p>";
            echo "<p>" .$row["Descripcion"]. "</p>";
            echo "</div>";
        echo "</li>";
    }}

else {
        echo "No se encontraron trabajadores";
    }
$conn->close();
?>