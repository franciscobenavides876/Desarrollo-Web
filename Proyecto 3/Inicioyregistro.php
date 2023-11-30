<?php
include 'conex.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $sql = "SELECT ID_Cliente, Correo_Electronico, Contrasena, Nombre FROM clientes WHERE Correo_Cliente = '$correo' AND Contrasena = '$contrasena'";
    $result = $conexion->query($sql);

    if ($result === false) {
        die("Error en la consulta SQL: " . $conexion->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contrasena_db = $row['contrasena'];
        $nombre = $row["Nombre"];
        $ID_cliente = $row["ID_cliente"];
        if ($contrasena == $contrasena_db) {
            $mensaje = "Inicio de sesión exitoso. ¡Bienvenido!";
            session_start();
            $_SESSION['Correo_Cliente'] = $correo;
            $_SESSION['Contrasena'] = $contrasena_db;
            $_SESSION['Nombre'] = $nombre;
            $_SESSION['ID_cliente'] = $ID_cliente;
            header('Location: Menu.php');
            exit();
        } else {
            $mensaje = "Error en el inicio de sesión. Comprueba tus credenciales.";
        }
    } else {
        $mensaje = "Error en el inicio de sesión. El correo no existe en la base de datos.";
    }
}

$conexion->close();
?>

<?php

include 'conex.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO clientes (Correo_Electronico, Nombre, Contrasena) VALUES ('$correo', '$nombre', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fusion Sabor</title>
    <link rel="stylesheet" href="InicioyRegistro.css">
</head>
<body>
<div class="contenedor-form">
        <div class="toggle" id="toggleButton" onclick="toggleButtonText(); changeBodyStyle(); CambiarColor(); CambiarColorDiv();">
            <span id="toggleText">Crear Cuenta</span>
        </div>
        
        <div class="formulario">
        <h1>Inicia Sesión</h1>
        <form method="POST" action="inicioyregistro.php"> <!-- Reemplaza 'nombre_de_esta_pagina.php' con el nombre de tu archivo PHP -->
            <div class="InputBox">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required> <!-- Agregamos el atributo 'name' para que los datos se envíen correctamente -->
            </div>
            <div class="InputBox">
                <label for="contrasena">Contraseña:</label> <!-- Corregimos el id de la etiqueta 'input' -->
                <input type="password" id="contrasena" name="contrasena" required> <!-- Agregamos el atributo 'name' para que los datos se envíen correctamente -->
            </div>
            <div class="Buttons">
                <button type="submit" onclick="RedirigirMenu()">Listo</button>
                <?php echo $mensaje;  ?>
            </div>
        </form>
    </div>
        
        <div class="formulario">
            <h1>Registrar</h1>
            <form id="registro-form" method="POST" action="inicioyregistro.php">
                <div class="Box">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                
                <div class="Box">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombrecompleto" name="nombre" required>
                </div>

                <div class="Box">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                </div>
                
                <div class="Box">
                    <label for="confirmar-contrasena">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar-contrasena" required>
                </div>

                <div class="Buttons">
                    <button type="submit" id="submitButton" onclick="validarFormulario()">Listo</button>
                </div>
            </form>
        </div>
        <div class="reset-password">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function RedirigirMenu() {
            window.location.href = 'FusionSabor.php';
        }

        function validarFormulario() {
        var contrasena = document.getElementById("contrasena").value;
        var confirmarContrasena = document.getElementById("confirmar-contrasena").value;

        if (contrasena !== confirmarContrasena) {
            alert("Las contraseñas no son iguales");
            return false;
        }
        return true;
    }

        $('.toggle').click(function(){
            $('.formulario').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: 'toggle'
            }, "slow");
            
            $('body').toggleClass('login-body');
        });

        function toggleButtonText() {
            var toggleText = document.getElementById("toggleText");

            if (toggleText.innerText === "Crear Cuenta") {
                toggleText.innerText = "Iniciar Sesión";
            } else {
                toggleText.innerText = "Crear Cuenta";
            }
        }

        function changeBodyStyle() {
            var body = document.body;

            if ($('#toggleText').text() === "Crear Cuenta") {
                body.style.background = "linear-gradient(150deg, #1A5276, #6C3EE2)";
            } else {
                body.style.background = "linear-gradient(150deg, #009688, #66BB6A)";
            }
        }
        
        function CambiarColor() {
        var button = document.getElementById('submitButton');

        if ($('#toggleText').text() === "Crear Cuenta") {
            button.style.backgroundColor = '#1A5276';
        } else {
            button.style.backgroundColor = '#009688';
        }
    }

    function CambiarColorDiv() {
        var a = document.querySelector('.reset-password');
        var toggleText = document.getElementById('toggleText').innerText.trim();

        if (toggleText === "Crear Cuenta") {
            a.style.backgroundColor = '#276A8C';
        } else {
            a.style.backgroundColor = '#35AD62';
        }
    }

    </script>
</body>
</html>