// Función para mostrar una página ocultando las demás
function showPage(idPage) {
    // Oculta todas las páginas
    document.querySelectorAll(".page").forEach(Page => {
        Page.style.display = "none";
    });

    // Muestra la página especificada
    document.getElementById(idPage).style.display = 'block';
}

// Función para realizar una solicitud HTTP, obtener el contenido y mostrarlo en un elemento HTML
function fetchAndDisplayData(Divclass, phpFile) {
    // Realiza la solicitud HTTP al archivo PHP
    fetch(phpFile)
        .then(response => response.text())
        .then(data => {
            // Obtiene el elemento HTML especificado por la clase y agrega el contenido recibido
            const ulElement = document.querySelector(Divclass);
            ulElement.innerHTML += data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Función para copiar contenido al portapapeles
function copiarAlPortapapeles(idBoton, contenido) {
    const boton = document.querySelector(idBoton);

    // Agrega un evento al hacer clic en el botón para mostrar una alerta con el contenido
    boton.addEventListener("click", () => {
        alert(contenido);
    });
}

// Función que se ejecuta cuando la ventana ha cargado completamente
window.onload = function () {
    // Realiza la solicitud HTTP y muestra el contenido en un elemento con la clase especificada
    fetchAndDisplayData(".col-md-6 px-0", 'equipo.php');
    
    // Agrega un evento al hacer clic en el botón para copiar al portapapeles
    copiarAlPortapapeles('#botonnumero', '+56 9 1234 56789');

    // Llama a la función showPage para mostrar la página de contacto al cargar la página
    showPage('contactPage');
}
