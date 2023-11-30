<?php
// Verifica si la variable de sesión 'Correo_Cliente' está establecida
if (isset($_SESSION['Correo_Cliente'])) {
    // Si está establecida, almacena el valor en una variable
    $Correo_Cliente = $_SESSION['Correo_Cliente'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion Sabor</title>
    <!-- Incluye estilos y scripts necesarios, como Bootstrap y archivos locales -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.scss">
    <script src="scripts.js"></script>
</head>
<body>
    <!-- Estructura del sitio web -->
    <div class="container">
        <!-- Encabezado del blog -->
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <!-- Espacio vacío -->
                </div>
                <div class="col-4 text-center">
                    <!-- Logo y título del blog -->
                    <a class="blog-header-logo text-dark" href="#">Fusion Sabor</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <!-- Enlace al perfil del usuario y botón de cierre de sesión -->
                    <a class="text-muted" href="#"></a>
                    <a class="btn btn-sm btn-outline-secondary" href="Perfil.php">Perfil</a>
                </div>
            </div>
        </header>

        <!-- Sección principal del sitio -->
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <!-- Mensaje de bienvenida -->
                <h1 class="display-4 font-italic">¡Bienvenido!</h1>
                <p class="lead my-3">En Fusion Sabor, creamos experiencias inolvidables para bodas, cumpleaños, eventos y fiestas. Desde exquisitos menús hasta una planificación impecable, nos encargamos de cada detalle para que tu evento sea único. Transforma tus momentos especiales con Fusion Sabor.</p>
            </div>
        </div>

        <!-- Tarjetas de eventos -->
        <div class="card-deck">
            <!-- Tarjeta de eventos -->
            <div class="card">
                <img src="img/filaChefs.png" class="card-img-top" alt="FilaChefs">
                <div class="card-body">
                    <h5 class="card-title">Eventos</h5>
                    <p class="card-text">Fusion Sabor se destaca en servicios de eventos, proporcionando asistencia integral. Desde exquisitos menús hasta una planificación detallada, creamos experiencias inolvidables para que cada evento sea único.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto hace 3 semanas</small>
                </div>
            </div>

            <!-- Tarjeta de fiestas -->
            <div class="card">
                <img src="img/cumpleaños.jpg" class="card-img-top" alt="Fiesta">
                <div class="card-body">
                    <h5 class="card-title">Fiestas</h5>
                    <p class="card-text">Fusion Sabor especializa su servicio en fiestas, brindando asistencia integral. Desde deliciosos menús hasta coordinación experta, creamos eventos memorables con estilo y atención personalizada.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto de hace 1 mes</small>
                </div>
            </div>

            <!-- Tarjeta de bodas -->
            <div class="card">
                <img src="img/boda.png" class="card-img-top" alt="Boda">
                <div class="card-body">
                    <h5 class="card-title">Bodas</h5>
                    <p class="card-text">Fusion Sabor ofrece servicios excepcionales para bodas, proporcionando experiencias culinarias y planificación detallada. Transformamos momentos especiales en recuerdos inolvidables con estilo y elegancia</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto hace 3 meses</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    // Inicia la sesión (si no está iniciada)
    session_start();
    
    // Verifica nuevamente si la variable de sesión 'Correo_Cliente' está establecida
    if (isset($_SESSION['Correo_Cliente'])) {
        // Redirige a la página de inicio y registro si la sesión está activa
        header("Location: Inicioyregistro.php");
        // Finaliza el script
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion Sabor</title>
    <!-- Incluye estilos y scripts necesarios, como Bootstrap y archivos locales -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.scss">
    <script src="scripts.js"></script>
</head>
<body>
    <!-- Estructura del sitio web para usuarios no autenticados -->
    <div class="container">
        <!-- Encabezado del blog para usuarios no autenticados -->
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <!-- Espacio vacío -->
                </div>
                <div class="col-4 text-center">
                    <!-- Logo y título del blog -->
                    <a class="blog-header-logo text-dark" href="#">Fusion Sabor</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <!-- Enlace para iniciar sesión o registrarse -->
                    <a class="text-muted" href="#"></a>
                    <a class="btn btn-sm btn-outline-secondary" href="Inicioyregistro.php">Inicia Sesión o Registrate</a>
                </div>
            </div>
        </header>

        <!-- Sección principal del sitio para usuarios no autenticados -->
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <!-- Mensaje de bienvenida -->
                <h1 class="display-4 font-italic">¡Bienvenido!</h1>
                <p class="lead my-3">En Fusion Sabor, creamos experiencias inolvidables para bodas, cumpleaños, eventos y fiestas. Desde exquisitos menús hasta una planificación impecable, nos encargamos de cada detalle para que tu evento sea único. Transforma tus momentos especiales con Fusion Sabor.</p>
            </div>
        </div>

        <!-- Tarjetas de eventos -->
        <div class="card-deck">
            <!-- Tarjeta de eventos -->
            <div class="card">
                <img src="img/filaChefs.png" class="card-img-top" alt="FilaChefs">
                <div class="card-body">
                    <h5 class="card-title">Eventos</h5>
                    <p class="card-text">Fusion Sabor se destaca en servicios de eventos, proporcionando asistencia integral. Desde exquisitos menús hasta una planificación detallada, creamos experiencias inolvidables para que cada evento sea único.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto hace 3 semanas</small>
                </div>
            </div>

            <!-- Tarjeta de fiestas -->
            <div class="card">
                <img src="img/cumpleaños.jpg" class="card-img-top" alt="Fiesta">
                <div class="card-body">
                    <h5 class="card-title">Fiestas</h5>
                    <p class="card-text">Fusion Sabor especializa su servicio en fiestas, brindando asistencia integral. Desde deliciosos menús hasta coordinación experta, creamos eventos memorables con estilo y atención personalizada.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto de hace 1 mes</small>
                </div>
            </div>

            <!-- Tarjeta de bodas -->
            <div class="card">
                <img src="img/boda.png" class="card-img-top" alt="Boda">
                <div class="card-body">
                    <h5 class="card-title">Bodas</h5>
                    <p class="card-text">Fusion Sabor ofrece servicios excepcionales para bodas, proporcionando experiencias culinarias y planificación detallada. Transformamos momentos especiales en recuerdos inolvidables con estilo y elegancia</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Foto hace 3 meses</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>