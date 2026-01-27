import './bootstrap';

const openMenu = document.getElementById('openMenu');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');

openMenu.onclick = () => mobileMenu.classList.remove('hidden');
closeMenu.onclick = () => mobileMenu.classList.add('hidden');

function toggleDesktopSearch() {
    const input = document.getElementById('desktopSearch');
    input.classList.toggle('w-48');
    input.classList.toggle('opacity-100');
}

function toggleMobileSearch() {
    const input = document.getElementById('mobileSearch');
    input.classList.toggle('w-full');
    input.classList.toggle('opacity-100');
}
