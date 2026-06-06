const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu'); // Asegúrate de que el ID coincida

// WordPress le asigna automáticamente la clase 'nav-menu' al <ul>, 
// pero no le pone ID. Vamos a añadirlo.
// En functions.php podemos solucionarlo con un filtro o simplemente 
// modificar el script para usar la clase.
// Mejor: buscamos el ul con la clase .nav-menu
const navMenuByClass = document.querySelector('.nav-menu');

if (hamburger && navMenuByClass) {
    hamburger.addEventListener('click', () => {
        navMenuByClass.classList.toggle('active');
    });
}

// Cierra menú al hacer clic en un enlace
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (navMenuByClass) navMenuByClass.classList.remove('active');
    });
});