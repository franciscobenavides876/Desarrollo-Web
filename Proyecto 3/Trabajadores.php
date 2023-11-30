<?php
// Conección a la base de datos
include 'conex.inc.php';

$consulta = "SELECT * FROM Trabajador";
$resultado = $conexion->query($consulta);

$resultados = array();

if ($resultado) {
    while ($fila = $resultado->fetch_assoc()) {
        $resultados[] = $fila;
    }

    $resultado->free();
} else {
    echo "Error en la consulta: " . $conexion->error;
}

$conexion->close();

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($resultados);
?>
