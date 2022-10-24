// ------------------------------------ //
// ----- DECLARATION DE CONSTANTE ----- //
// ------------------------------------ //

// ----- Menu Burger ----- //

const menuBurger = document.getElementById('menuBurger');
const nav = document.getElementById('nav');
const spanTrois = document.getElementById('spanNotSeen');
const spanUn = document.getElementById('spanUn');
const spanDeux = document.getElementById('spanDeux');

// ----------------------------- //
// ----- FIN DES CONSTANTE ----- //
// ----------------------------- //

// ----------------------- //
// ----- MENU BURGER ----- //
// ----------------------- //

menuBurger.addEventListener('click', () => {
    nav.classList.toggle('navSeen');
    spanTrois.classList.toggle('spanNotSeen');
    spanUn.classList.toggle('spanRotateUn');
    spanDeux.classList.toggle('spanRotateDeux');
})

// -------------------------- //
// ----- END MENU BURGER ---- //
// -------------------------- //