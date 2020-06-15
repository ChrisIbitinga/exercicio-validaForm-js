'use strict'

// FUNÇÃO PARA ABRIR O MENU MOBILE
function openSide() {
    let abrir = 'open';
    let classe = document.getElementById("menu-mobile")
    classe.className += " open";

}
// FUNÇÃO PARA FECHAR O MENU MOBILE
function closeSide() {
    let abrir = 'open';
    let classe = document.getElementById("menu-mobile")
    classe.className = " menu-mobile";
}