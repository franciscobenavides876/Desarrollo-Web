<?php

$servername = "db.inf.uct.cl";
$username = "kparra"; 
$password = "21566360"; 
$database = "A2023_kparra"; 

// Establece una conexión a la base de datos usando la información proporcionada
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica si la conexión se estableció con éxito
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>