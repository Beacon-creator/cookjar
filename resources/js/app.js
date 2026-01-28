import './bootstrap';

const openMenu = document.getElementById('openMenu');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');

openMenu.onclick = () => mobileMenu.classList.remove('hidden');
closeMenu.onclick = () => mobileMenu.classList.add('hidden');
