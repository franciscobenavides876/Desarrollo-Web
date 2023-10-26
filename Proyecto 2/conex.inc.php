<?php
$servername = "pillan.inf.uct.cl"; // Nombre del servidor 
$username = "kparra"; // Nombre de usuario
$password = "21566360"; // Contraseña del usuario
$database = "A2023_kparra"; // Nombre de la base de datos

// Establece una conexión a la base de datos usando la información proporcionada
$conn = new mysqli($servername, $username, $password, $database);

// Verifica si la conexión se estableció con éxito
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>