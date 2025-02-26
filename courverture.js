const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

// Toggle la classe "active" au clic
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});
