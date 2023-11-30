<?php
// Verifica si la variable de sesión 'Correo_Cliente' está establecida
if (isset($_SESSION['Correo_Cliente'])) {
    // Si está establecida, almacena el valor en una variable
    $Correo_Cliente = $_SESSION['Correo_Cliente'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Etiquetas meta para el conjunto de caracteres y el viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página web -->
    <title>Fusion Sabor</title>
    <!-- Enlaces CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Hojas de estilo para la búsqueda y estilos personalizados -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.scss">
    <!-- Conjunto de scripts de Bootstrap y scripts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</head>

<!-- Encabezado con tema oscuro -->
<header data-bs-theme="dark">
    <!-- Barra de navegación desplegable con fondo oscuro -->
    <div class="collapse text-bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <!-- Primera columna con información y enlaces -->
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4>Información</h4>
                    <ul class="list-unstyled">
                        <!-- Enlace a la página de inicio -->
                        <li><a href="#" class="text-white" onclick="showPage('homePage')">Home</a></li>
                        <!-- Enlace a la página de productos y servicios -->
                        <li><a href="#" class="text-white" onclick="showPage('servicesPage')">Productos y Servicios</a></li>
                        <!-- Enlace a la página de contacto -->
                        <li><a href="#" class="text-white" onclick="showPage('contactPage')">Contacto</a></li>
                    </ul>
                </div>
                <!-- Segunda columna con información adicional y enlaces -->
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4>Quienes Somos</h4>
                    <ul class="list-unstyled">
                        <!-- Enlace a la página de historia -->
                        <li><a href="#" class="text-white" onclick="showPage('historyPage')">Historia</a></li>
                        <!-- Enlace a la página del equipo -->
                        <li><a href="#" class="text-white" onclick="showPage('teamPage')">Equipo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Barra de navegación principal con tema oscuro y sombra -->
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <!-- Botón para desplegar la barra de navegación en pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icono del botón de navegación -->
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<!-- Página de Contacto -->
<div id="contactPage" class="page">
    <fieldset>
        <!-- Encabezado de la página de contacto con diseño oscuro y texto blanco -->
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <!-- Columna principal con contenido de contacto -->
            <div class="col-md-6 px-0">
                <!-- Sección de información general -->
                <div class="contact">
                    <h1>Contacto</h1>
                    <p>Estamos encantados de ayudarte en todo lo que necesites. No dudes en ponerte en contacto con nosotros para cualquier consulta, reserva o información adicional. Nuestro equipo de atención al cliente está listo para asistirte.</p>
                </div>
                
                <!-- Estilo CSS interno para un botón específico -->
                <style>
                    #botonnumero {
                        display: flex;
                        margin: 20px auto;
                    }
                </style>

                <!-- Botón para mostrar un número -->
                <button id="botonnumero">Ver Numero</button>

                <!-- Sección de información de la oficina en Chile -->
                <div class="office">
                    <h2>Número de Oficina en Chile</h2>
                    <p>Si deseas hablar con nosotros, puedes contactarnos a través de nuestro número de oficina en Chile:</p>
        
                    <p>Nuestro horario de atención telefónica es de lunes a viernes de 9:00 a.m. a 6:00 p.m. y los sábados de 10:00 a.m. a 2:00 p.m. Estamos aquí para responder tus preguntas, ayudarte con reservas y brindarte información detallada sobre nuestros servicios.</p>
                </div>

                <!-- Sección de ubicación de la oficina en Chile -->
                <div class="ubication">
                    <h2>Ubicación de Oficina</h2>
                    <p>Nuestra oficina en Chile se encuentra en:</p>
                    <p><strong>Dirección: Calle Ejemplo 123, Santiago, Chile</strong></p>
        
                    <p>Si prefieres visitarnos en persona, por favor, asegúrate de coordinar una cita con anticipación para que podamos brindarte la mejor atención posible.</p>
                </div>

                <!-- Sección del formulario de contacto -->
                <div class="form">
                    <h2>Formulario de Contacto</h2>
                    <p>También puedes comunicarte con nosotros a través de nuestro formulario de contacto en línea. Completa los campos requeridos y te responderemos en breve.</p>    
                </div>
                <!-- Formulario de contacto (aún sin contenido) -->
                <form id="contactForm"></form>
            </div>
        </div>
    </fieldset>
</div>

<!-- Página de Historia -->
<div id="historyPage" class="page">
    <fieldset>
        <!-- Encabezado de la página de historia con diseño oscuro y texto blanco -->
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <!-- Columna principal con contenido de la historia -->
            <div class="col-md-6 px-0">
                <h1>Nuestra Historia</h1>
                <p>GastroFest, una de las empresas más reconocidas en la industria de la gastronomía y el servicio, tiene una historia que comenzó en un pequeño rincón de la ciudad en el año 20XX. En ese entonces, un grupo de apasionados chefs, bartenders, garzones y camareros se unieron con un sueño común: brindar experiencias culinarias excepcionales a las personas, directamente en sus eventos y lugares preferidos.</p>
                
                <!-- Más contenido de la historia -->
                <!-- ... -->

                <p>GastroFest seguirá su compromiso de crear recuerdos y celebrar la vida a través de experiencias gastronómicas únicas. Gracias por ser parte de nuestra historia y por permitirnos ser parte de la tuya. Esperamos con ansias seguir escribiendo juntos nuevos capítulos en el mundo de la cocina y el servicio.</p>
            </div>
        </div>
    </fieldset>
</div>

<!-- Página del Equipo -->
<div id="teamPage" class="page">
    <!-- Encabezado de la página del equipo con diseño oscuro y texto blanco -->
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <!-- Columna principal con título del equipo -->
        <div class="col-md-6 px-0">
            <h1>Nuestro Equipo</h1>
        </div>
    </div>
</div>

<!-- Página de Servicios -->
<div id="servicesPage" class="page">
    <fieldset>
        <!-- Encabezado de la página de servicios con diseño oscuro y texto blanco -->
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <!-- Columna principal con contenido de servicios -->
            <div class="col-md-6 px-0">
                <!-- Título de la página de servicios -->
                <title>Tus Eventos Especiales</title>
                
                <!-- Contenido detallado sobre contrataciones para eventos -->
                <div>
                    <h1>Contrataciones para Eventos</h1>
                    <!-- Sección para cumpleaños -->
                    <h2>Cumpleaños</h2>
                    <p>Celebra tu cumpleaños con nosotros y disfruta de una fiesta llena de diversión. Nuestros servicios para cumpleaños incluyen:</p>
                    <!-- Lista de personal necesario para cumpleaños -->
                    <ul>
                        <li>Cocineros: <strong>1-2</strong></li>
                        <li>Camareros: <strong>2-4</strong></li>
                        <li>Garzones: <strong>1-2</strong></li>
                        <li>Bartenders: <strong>1-2</strong></li>
                    </ul>

                    <!-- Sección para bares y restaurantes -->
                    <h2>Bares y Restaurantes</h2>
                    <p>Brindamos personal experimentado para bares y restaurantes que deseen mejorar su servicio. Nuestros servicios para bares y restaurantes incluyen:</p>
                    <!-- Lista de personal necesario para bares y restaurantes -->
                    <ul>
                        <li>Cocineros: <strong>3-5</strong></li>
                        <li>Camareros: <strong>5-10</strong></li>
                        <li>Garzones: <strong>3-5</strong></li>
                        <li>Bartenders: <strong>2-4</strong></li>
                    </ul>

                    <!-- Información adicional y llamado a la acción -->
                    <p>¡Contáctanos para obtener más información sobre nuestros servicios y tarifas!</p>
                </div>
            </div>
        </div>
    </fieldset>
</div>
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
                    <h1 class="blog-header-logo text-dark" href="#">Fusion Sabor </h1>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <!-- Enlace para iniciar sesión o registrarse -->
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
    <!-- Etiquetas meta para el conjunto de caracteres y el viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página web -->
    <title>Fusion Sabor</title>
    <!-- Enlaces CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Hojas de estilo para la búsqueda y estilos personalizados -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.scss">
    <!-- Conjunto de scripts de Bootstrap y scripts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                    <h1 class="blog-header-logo text-dark" href="#">Fusion Sabor </h1>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <!-- Enlace para iniciar sesión o registrarse -->
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