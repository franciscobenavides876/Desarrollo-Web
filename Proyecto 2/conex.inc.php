<?php
$servername = "localhost"; // Nombre del servidor 
$username = "root"; // Nombre de usuario de la base de datos 
$password = ""; // Contraseña del usuario de la base de datos
$database = "fusionsabor"; // Nombre de la base de datos que deseas usar

// Establece una conexión a la base de datos usando la información proporcionada
$conn = new mysqli($servername, $username, $password, $database);

// Verifica si la conexión se estableció con éxito
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>