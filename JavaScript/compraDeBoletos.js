// Botón Cotizar
const btnCotizar = document.getElementById('cotizarBtn');
const msgCotizar = document.getElementById('mensajeCotizar');

btnCotizar.addEventListener('click', () => {
    msgCotizar.classList.remove('d-none');
});

// Botón Comprar
const btnComprar = document.getElementById('comprarBtn');
const msgComprar = document.getElementById('mensajeComprar');

btnComprar.addEventListener('click', () => {
    msgComprar.classList.remove('d-none');
});