function showPage(idPage) {

document.querySelectorAll(".page").forEach(Page => {
    Page.style.display = "none";
});

document.getElementById(idPage).style.display = 'block';
}

function fetchAndDisplayData(Divclass, phpFile) {

fetch(phpFile)
    .then(response => response.text())
    .then(data => {

    const ulElement = document.querySelector(Divclass);
    ulElement.innerHTML += data;

    })
    .catch(error => {
    console.error('Error:', error);
}
);
}

function copiarAlPortapapeles(idBoton, contenido) {
const boton = document.querySelector(idBoton);

boton.addEventListener("click", () => {
    alert(contenido);
})

}




window.onload = function () {
fetchAndDisplayData(".col-md-6 px-0", 'equipo.php');
copiarAlPortapapeles('#botonnumero', '+56 9 1234 56789');
showPage('contactPage'); // Llama a la función showPage al cargar la página
}