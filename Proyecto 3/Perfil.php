<?php
// Inicia la sesión
session_start();

// Verifica si no está establecida la sesión de nombre y correo del cliente
if (!(isset($_SESSION['nombre_Cliente']) && isset($_SESSION['Correo_Cliente']))) {
    // Redirige a la página de inicio y registro
    header("Location: Inicioyregistro.php");
    // Finaliza el script
    exit();
}

// Conección a la base de datos
include 'conex.inc.php';

// Obtiene el nombre y correo del cliente desde la sesión
$nombre = isset($_SESSION['nombre_Cliente']) ? $_SESSION['nombre_Cliente'] : '';
$correo = isset($_SESSION['Correo_Cliente']) ? $_SESSION['Correo_Cliente'] : '';

// Proceso de actualización de perfil
if (isset($_POST['actualizar'])) {
    $nuevo_nombre = $_POST['nombre'];
    $nuevo_correo = $_POST['correo'];

    $sql = "UPDATE clientes SET nombre_Cliente='$nuevo_nombre', Correo_Cliente='$nuevo_correo' WHERE Correo_Cliente='$correo'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['nombre_Cliente'] = $nuevo_nombre;
        $_SESSION['Correo_Cliente'] = $nuevo_correo;
        echo "<script>alert('Registro actualizado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar el registro: " . $conn->error . "');</script>";
    }
}

// Proceso de cambio de contraseña
if (isset($_POST['cambiar'])) {
    $contrasena = $_POST['contrasena'];
    $sql = "UPDATE clientes SET contraseña='$contrasena' WHERE Correo_Cliente='$correo'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Contraseña actualizada exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar la contraseña: ".$conn->error."');</script>";
    }
}

// Proceso de eliminación de cuenta
if (isset($_POST['eliminar_cuenta'])) {
    $contrasena = $_POST['password'];
    $sql = "SELECT contraseña, ID_cliente FROM clientes WHERE Correo_Cliente='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($contrasena == $row['contraseña']) {
            $id_cliente = $row['ID_cliente'];

            // Eliminar referencias en la tabla clientes
            $sql_delete_clientes = "DELETE FROM clientes WHERE ID_cliente='$id_cliente'";

            if ($conn->query($sql_delete_clientes) === TRUE) {
                session_destroy();
                echo "<script>alert('Cuenta y registros relacionados eliminados exitosamente');</script>";
            } else {
                echo "<script>alert('Error al eliminar registros en la tabla de clientes: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('La contraseña ingresada no coincide con la contraseña actual');</script>";
        }
    } else {
        echo "<script>alert('No se encontró ninguna cuenta asociada a este correo electrónico');</script>";
    }
}

// Proceso de cierre de sesión
if (isset($_POST['logout'])) {
    session_destroy(); 
    echo "<script>alert('Has cerrado la sesión exitosamente'); window.location.href = 'FusionSabor.php';</script>";
    exit();
}

// Cierra la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- Incluye la hoja de estilos para el perfil -->
    <link rel="stylesheet" href="Perfil.css">
</head>
<body>
    <!-- Estructura del perfil del cliente -->
    <div class="container">
        <div class="profile-section">
            <h2>Tu Perfil</h2>
            <div class="container">
                <div class="trabajo">
                    <h3></h3>
                    <!-- Muestra el nombre y correo actual del cliente -->
                    <label for="nombre">Nombre:</label>
                    <span id="nombre-actual"><?php echo $nombre; ?></span>
                    <br>
                    <label for="email">Correo Electrónico (Gmail):</label>
                    <span id="email-actual"><?php echo $correo; ?></span>
                </div>
            </div>

            <!-- Formulario para cambiar nombre y correo -->
            <form method="post" action="">
                <div id="changeinf">
                    <h2>Cambiar Nombre y Correo Electrónico</h2>
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
                    <br>
                    <label for="correo">Nuevo Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" required>
                    <button type="submit" name="actualizar">Actualizar Perfil</button>
                </div>
            </form>

            <!-- Formulario para cambiar la contraseña -->
            <form method="post" action="">
                <div id="passtext">
                    <h2>Cambiar Contraseña</h2>
                    <label for="contrasena">Nueva Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <button type="submit" name="cambiar">Cambiar Contraseña</button>
                </div>
            </form>

            <h2>Cerrar Sesión</h2>
            <!-- Formulario para cerrar sesión -->
            <form method="post" action="">
                <button class="button-style" type="submit" name="logout">Cerrar Sesión</button>
            </form>

            <!-- Formulario para eliminar la cuenta -->
            <form method="post" action="">
                <div id="eliminar_cuenta">
                    <h2>Eliminar Cuenta</h2>
                </div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="eliminar_cuenta">Eliminar Cuenta</button>
            </form>
        </div>
    </div>
</body>
</html>
