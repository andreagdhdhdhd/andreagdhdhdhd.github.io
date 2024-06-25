"use strict"

const menu = document.querySelector('.menu');
var flecha = document.getElementById("flecha");
var menuConsejos = document.getElementById("menuConsejos");

window.addEventListener('scroll', () => {
    if (window.scrollY > 15) {
        menu.classList.add('menu-scrolled');
    } else if (window.scrollY <= 15) {
        menu.classList.remove('menu-scrolled');
    }
})

flecha.onclick = function () {
    menu.classList.toggle("hidden");
    if (menu.classList.contains("hidden")) {
        menuConsejos.style.display = "block";
        menu.style.height = "100px";
    } else if (!menu.classList.contains("hidden")) {
        menuConsejos.style.display = "none";
        menu.style.height = "80px";
        menu.classList.remove("hidden");
    }
}


