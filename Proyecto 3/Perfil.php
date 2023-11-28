
<?php
session_start();

if (!(isset($_SESSION['nombre_Cliente']) && isset($_SESSION['Correo_Cliente']))) {
    header("Location: Inicioyregistro.php.php");
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techome";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "<script>alert('Conexión fallida: ".$conn->connect_error."');</script>";
}
$nombre = isset($_SESSION['nombre_Cliente']) ? $_SESSION['nombre_Cliente'] : '';
$correo = isset($_SESSION['Correo_Cliente']) ? $_SESSION['Correo_Cliente'] : '';

if (isset($_POST['actualizar'])) {
    $nuevo_nombre = $_POST['nombre'];
    $nuevo_correo = $_POST['correo']; // Nuevo valor del correo

    $sql = "UPDATE clientes SET nombre_Cliente='$nuevo_nombre', Correo_Cliente='$nuevo_correo' WHERE Correo_Cliente='$correo'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['nombre_Cliente'] = $nuevo_nombre; // Actualizar nombre en la sesión
        $_SESSION['Correo_Cliente'] = $nuevo_correo; // Actualizar correo en la sesión
        echo "<script>alert('Registro actualizado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar el registro: " . $conn->error . "');</script>";
    }
}

if (isset($_POST['cambiar'])) {
    $contrasena = $_POST['contrasena'];
    $sql = "UPDATE clientes SET contraseña='$contrasena' WHERE Correo_Cliente='$correo'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Contraseña actualizada exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar la contraseña: ".$conn->error."');</script>";
    }
}

if (isset($_POST['eliminar_cuenta'])) {
    $contrasena = $_POST['password'];
    $sql = "SELECT contraseña, ID_cliente, ID_direccion FROM clientes WHERE Correo_Cliente='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($contrasena == $row['contraseña']) {
            $id_cliente = $row['ID_cliente'];
            $id_direccion = $row['ID_direccion'];

            // Eliminar referencias en la tabla clientes
            $sql_delete_clientes = "DELETE FROM clientes WHERE ID_cliente='$id_cliente'";

            if ($conn->query($sql_delete_clientes) === TRUE) {
                // Eliminar registros en direccion
                $sql_delete_direccion = "DELETE FROM direccion WHERE ID_direccion='$id_direccion'";

                if ($conn->query($sql_delete_direccion) === TRUE) {
                    session_destroy();
                    echo "<script>alert('Cuenta y registros relacionados eliminados exitosamente');</script>";
                } else {
                    echo "<script>alert('Error al eliminar registros en la tabla de direccion: " . $conn->error . "');</script>";
                }
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


if (isset($_POST['logout'])) {
    session_destroy(); 
    echo "<script>alert('Has cerrado la sesión exitosamente'); window.location.href = 'Menu.php';</script>";
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Perfil.css">
</head>
<body>
<div class="container">
    <div class="profile-section">
        <h2>Tu Perfil</h2>
        <div class="container">
            <div class="trabajo">
                <h3></h3>
                <label for="nombre">Nombre:</label>
                <span id="nombre-actual"><?php echo $nombre; ?></span>
                <br>
                <label for="email">Correo Electrónico (Gmail):</label>
                <span id="email-actual"><?php echo $correo; ?></span>
            </div>
        </div>
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
        <form method="post" action="">
            <div id="passtext">
                <h2>Cambiar Contraseña</h2>
                <label for="contrasena">Nueva Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
                <button type="submit" name="cambiar">Cambiar Contraseña</button>
            </div>
        </form>
        <h2>Cerrar Sesión</h2>
        <form method="post" action="">
            <button class="button-style" type="submit" name="logout">Cerrar Sesión</button>
        </form>
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

<div id="menu-toggle">&#9776;</div> 
        <script>
        const menu = document.getElementById('menu');
        const menuToggle = document.getElementById('menu-toggle');
        const configuracion_de_perfil = document.getElementById('config');
        const quienesSomos = document.getElementById('Nuestrahistoria2');
        const direcciones = document.getElementById('direcciones');
        const soporte = document.getElementById('soporte');
        const politica_de_privacidad = document.getElementById('politica_de_privacidadc');
        
        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('active'); 
        });
        
        configuracion_de_perfil.addEventListener('click', () => {
            console.log('Clic en Configuración');
        });
        
        quienesSomos.addEventListener('click', () => {
            console.log('Clic en Quienes Somos');
        });

        politica_de_privacidadc.addEventListener('click', () => {
            console.log('Clic en Politicas de Privacidad')
        });

        direcciones.addEventListener('click', ()=> {
            console.log('Clic en Direcciones')
        });

        function fetchData(order) {
            fetch('gettrabajadores.php?order=' + order)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('trabajadoresContainer').innerHTML = data;
                })
                .catch(error => {
                    console.error('Hubo un error al obtener los datos: ' + error);
                });
        }
        </script>
</body>
</html>
