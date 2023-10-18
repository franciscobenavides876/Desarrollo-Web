<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GastroFest</title>
        <link rel="stylesheet" href="styles.css">
        <script src="scripts.js"></script>
    </head>
        <nav>
            <div class="navbar">
                <div class="container nav-container">
                    <input class="checkbox" type="checkbox"/>
                    <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                    </div>
                    <div class="menu-items">
                        <li><a href="#" onclick="showPage('homePage')">Home</a></li>
                        <li><a href="#" onclick="showPage('servicesPage')">Productos y Servicios</a></li>
                        <li>
                            <a href="#" onclick="showPage('infoPage')">Quiénes somos</a>
                            <ul id="quienesSomosSubMenu" class="sub-menu">
                                <li><a href="#" onclick="showPage('historyPage')">Historia</a></li>
                                <li><a href="#" onclick="showPage('teamPage')">Equipo</a></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="showPage('contactPage')">Contacto</a></li>
                    </div>
                </div>
            </div>
            <div class="FusionSabor">FusionSabor</div>
        </nav>
    <body>
            <div id="contactPage" class="page">
            <fieldset>
                <div class="contact-container">
                    <div class="contact">
                        <h1>Contacto</h1>
                        <p>Estamos encantados de ayudarte en todo lo que necesites. No dudes en ponerte en contacto con nosotros para cualquier consulta, reserva o información adicional. Nuestro equipo de atención al cliente está listo para asistirte.</p>
                    </div>
                    <div class="office">
                        <h2>Número de Oficina en Chile</h2>
                        <p>Si deseas hablar con nosotros, puedes contactarnos a través de nuestro número de oficina en Chile:</p>
                        <p><strong>Teléfono: +56 2 123 4567</strong></p>
            
                        <p>Nuestro horario de atención telefónica es de lunes a viernes de 9:00 a.m. a 6:00 p.m. y los sábados de 10:00 a.m. a 2:00 p.m. Estamos aquí para responder tus preguntas, ayudarte con reservas y brindarte información detallada sobre nuestros servicios.</p>
                    </div>
                    <div class="ubication">
                        <h2>Ubicación de Oficina</h2>
                        <p>Nuestra oficina en Chile se encuentra en:</p>
                        <p><strong>Dirección: Calle Ejemplo 123, Santiago, Chile</strong></p>
            
                        <p>Si prefieres visitarnos en persona, por favor, asegúrate de coordinar una cita con anticipación para que podamos brindarte la mejor atención posible.</p>
                    </div>
                    <div class="form">
                        <h2>Formulario de Contacto</h2>
                        <p>También puedes comunicarte con nosotros a través de nuestro formulario de contacto en línea. Completa los campos requeridos y te responderemos en breve.</p>    
                    </div>
                    <form id="contactForm"></form>
                </div>
            </fieldset>
        </div>
        <div id="historyPage" class="page">
            <fieldset>
                <div class="history-container">
                    <h1>Nuestra Historia</h1>
                    <p>GastroFest, una de las empresas más reconocidas en la industria de la gastronomía y el servicio, tiene una historia que comenzó en un pequeño rincón de la ciudad en el año 20XX. En ese entonces, un grupo de apasionados chefs, bartenders, garzones y camareros se unieron con un sueño común: brindar experiencias culinarias excepcionales a las personas, directamente en sus eventos y lugares preferidos.</p>
                    
                    <p>La visión detrás de GastroFest era simple pero poderosa: llevar la excelencia culinaria y el servicio impecable a bodas elegantes, animadas fiestas de cumpleaños, bares y restaurantes que deseaban destacar, y cualquier otro evento que requiriera un toque gourmet. Así nació GastroFest, con la misión de hacer que cada ocasión sea verdaderamente memorable a través de la comida y la bebida.</p>
                    
                    <p>Con el tiempo, GastroFest creció y evolucionó. Nuestro equipo de talentosos chefs, camareros y bartenders se dedicó incansablemente a perfeccionar su oficio. Crearon platos deliciosos que deleitaban los paladares más exigentes y cócteles innovadores que se convertían en el alma de la fiesta.</p>
                    
                    <p>Hoy, GastroFest es un referente en la industria, conocido por su compromiso con la calidad y la pasión por la gastronomía y el servicio. Nuestra historia se ha entrelazado con la de innumerables clientes satisfechos que nos han permitido ser parte de sus momentos especiales.</p>
                    
                    <p>En cada boda, en cada cumpleaños, en cada restaurante que hemos ayudado a destacar, hemos dejado una huella de excelencia y sabor. Estamos agradecidos por cada uno de nuestros clientes, antiguos y nuevos, que nos han permitido ser parte de sus celebraciones y eventos importantes.</p>
                    
                    <p>GastroFest seguirá su compromiso de crear recuerdos y celebrar la vida a través de experiencias gastronómicas únicas. Gracias por ser parte de nuestra historia y por permitirnos ser parte de la tuya. Esperamos con ansias seguir escribiendo juntos nuevos capítulos en el mundo de la cocina y el servicio.</p>
                </div>
            </fieldset>
        </div>

    <div id="servicesPage" class="page">
            <fieldset>
                <div class="services-container">
                    <h1>Nuestros Productos y Servicios</h1>

                    <div class="birthday">
                        <h2>Cumpleaños</h2>
                        <img src="./img/cumpleaños.jpg" alt="birthday">
                        <p>Celebra tu cumpleaños con nosotros y disfruta de una fiesta llena de diversión. Nuestros servicios para cumpleaños incluyen:</p>
                        <ul>
                            <li>Cocineros: <strong>1-2</strong></li>
                            <li>Camareros: <strong>2-4</strong></li>
                            <li>Garzones: <strong>1-2</strong></li>
                            <li>Bartenders: <strong>1-2</strong></li>
                        </ul>
                        <p>Con un valor de $140.000 las 4 horas</p>
                    </div>
                    <div class="baryrestaurant">
                        <h2>Bares y Restaurantes</h2>
                        <img src="./img/bar&restaurante.jpg" alt="Bar y Restaurante">
                        <p>Brindamos personal experimentado para bares y restaurantes que deseen mejorar su servicio. Nuestros servicios para bares y restaurantes incluyen:</p>
                        <ul>
                            <li>Cocineros: <strong>3-5</strong></li>
                            <li>Camareros: <strong>5-6</strong></li>
                            <li>Garzones: <strong>3-6</strong></li>
                            <li>Bartenders: <strong>2-4</strong></li>
                        </ul>
                        <p>Con un valor de $180.000 las 4 horas</p>
                    </div>
                    <div class="wedding">
                        <h2>Boda</h2>
                        <img src="./img/boda.jpg" alt="boda">
                        <p>Brindamos personal experimentado para bares y comidas de lujo, que deseen mejorar su servicio. Nuestros servicios para bares y restaurantes incluyen:</p>
                        <ul>
                            <li>Cocineros: <strong>3-5</strong></li>
                            <li>Camareros: <strong>5-6</strong></li>
                            <li>Garzones: <strong>4-6</strong></li>
                            <li>Bartenders: <strong>3-4</strong></li>
                        </ul>
                        <p>Con un valor de $240.000 las 4 horas</p>
                    </div>
                </div>
            </fieldset>
        </div>
        <div id="teamPage" class="page">
            <div class="team-container">
                <h1>Nuestro Equipo</h1>

                <?php
                include 'conex.inc.php';
         
                    $sql = "SELECT * FROM trabajador";
                        $result = $conn->query($sql);
        
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li>";
                            echo "<div class=\"Trabajador\">";
                            echo "<img " . $row["Imagen"] . " alt='Foto del trabajador'>";
                            echo "<h3>Nombre: " . $row["Nombre"] . "</h3><br>";
                            echo "<p>Apellido: " . $row["Apellido"] . "</p><br>";
                            echo "<p>Cargo: " . $row["Cargo"] . "</p><br>";
                            echo "<p>" . $row["Descripcion"] . "</p><br>";
                            echo "</div>";
                            echo "</li>";
                        }
                    } else {
                        echo "No se encontraron trabajadores";
                    }
        
                    $conn->close();
                ?>          
            </div>    
        </div>
        <div id="homePage" class="page homePage ">
                <div class="FusionSabor">FusionSabor</div>
                <p>¿Por qué hacer el trabajo dificil cuando nos lo puedes dejar a nosotros?</p>
                <p>Organizamos eventos por ti y para ti.</p>
            <div class="row1">
                <fieldset class="tarjeta1">
                    <div class="content-container">
                        <img src="./img/filaChefs.png" alt="Fila de Chefs" class="imgTarjeta">
                        <div class="content">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo possimus voluptas esse quod laudantium accusantium quae pariatur! Asperiores porro dicta vero autem repellendus provident, incidunt eum quidem voluptas aliquam minus!
                            </p>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="tarjeta2">
                    <div class="content-container">
                        <img src="./img/boda.png" alt="Fila de sillas" class="imgTarjeta">
                        <div class="content">
                            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti impedit itaque nemo delectus doloremque ad veritatis quasi ut sit. Accusamus temporibus minus velit facere alias soluta omnis dignissimos voluptatum porro.
                            </p>
                            <ul>
                                <li>Cocineros: <strong>2-3</strong></li>
                                <li>Camareros: <strong>4-6</strong></li>
                                <li>Garzones: <strong>2-4</strong></li>
                                <li>Bartenders: <strong>2-3</strong></li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
                
                </div>
                <fieldset class="tarjeta">
                    <p class="content">
                        Somos especialistas en planificación de eventos para bodas, cumpleaños, bares y restaurantes. Nuestro equipo altamente calificado se encarga de cada detalle para que tu evento sea un éxito.
                        </p>
                    <p class="randomQuote">"Crea recuerdos, celebra la vida."</p>
                </fieldset>

            </div>
            <div id="servicesPage" class="page">
                <fieldset>
                    <title>Tus Eventos Especiales</title>
                        <div>
                            <h1>Contrataciones para Eventos</h1>
                            <h2>Cumpleaños</h2>
                            <p>Celebra tu cumpleaños con nosotros y disfruta de una
                                fiesta llena de diversión. Nuestros servicios para
                                cumpleaños incluyen:</p>
                            <ul>
                                <li>Cocineros: <strong>1-2</strong></li>
                                <li>Camareros: <strong>2-4</strong></li>
                                <li>Garzones: <strong>1-2</strong></li>
                                <li>Bartenders: <strong>1-2</strong></li>
                            </ul>

                            <h2>Bares y Restaurantes</h2>
                            <p>Brindamos personal experimentado para bares y
                                restaurantes que deseen mejorar su servicio.
                                Nuestros servicios para bares y restaurantes
                                incluyen:</p>
                            <ul>
                                <li>Cocineros: <strong>3-5</strong></li>
                                <li>Camareros: <strong>5-10</strong></li>
                                <li>Garzones: <strong>3-5</strong></li>
                                <li>Bartenders: <strong>2-4</strong></li>
                            </ul>

                            <p>¡Contáctanos para obtener más información sobre
                                nuestros servicios y tarifas!</p>
                        </div>
                </fieldset>
            </div>
    </body>
    <footer>
    </footer>
</html>
