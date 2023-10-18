function showPage(idPage) {
    document.querySelectorAll(".page").forEach(function (Page) {
    Page.style.display = "none";
    });
    document.getElementById(idPage).style.display = 'block';

}

window.onload = function () {
    showPage('homePage'); // Llama a la función showPage al cargar la página
}

function showPage(pageId) {
    // Oculta todas las páginas
    var pages = document.querySelectorAll('.page');
    for (var i = 0; i < pages.length; i++) {
        pages[i].style.display = 'none';
    }

    // Muestra la página con el ID especificado
    var page = document.getElementById(pageId);
    if (page) {
        page.style.display = 'block';
    }
}

// Manejar clic en "Productos y Servicios"
var productosLink = document.getElementById('productosLink');
productosLink.addEventListener('click', function (event) {
    event.preventDefault(); 
    showPage('servicesPage');
});


showPage('homePage');