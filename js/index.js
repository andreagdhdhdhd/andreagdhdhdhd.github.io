"use strict"

//carrusel

    const pasarFoto = document.getElementById("avanzar");
    const retrocederFoto = document.getElementById("retroceder");
    const photo = document.getElementById("foto");
    const tiempo = 1000;

    let elemento = 0;

    const listaFotos = [
        'images/carrusel/WatermelonLover2.jpg',
        'images/carrusel/bananas.jpg',
        'images/carrusel/langonstains.jpg',
        'images/carrusel/lemons.jpg',
        'images/carrusel/MrPoppinsPlayingWithChildren.jpg',
    ];

    pasarFoto.onclick = function() {
        
        elemento++;

        if (elemento > listaFotos.length - 1) elemento = 0;

        photo.style.backgroundImage = `url(${listaFotos[elemento]})`;
    };

    retrocederFoto.onclick = function() {

        elemento--;

        if (elemento < 0) elemento = listaFotos.length - 1;

        photo.style.backgroundImage = `url(${listaFotos[elemento]})`;
    };

    setTimeout(pasarFoto, 2000);

