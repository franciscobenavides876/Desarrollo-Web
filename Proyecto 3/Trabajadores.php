<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "fusionsabor";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

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
