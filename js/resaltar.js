"use strict"

var enlaces = document.querySelectorAll('.menu a');
var secciones = document.querySelectorAll('.content');


function resaltarEnlaceActivo() {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

  secciones.forEach(function (seccion) {
    var seccionTop = seccion.offsetTop - 50;
    var seccionBottom = seccionTop + seccion.offsetHeight;

    if (scrollPosition >= seccionTop && scrollPosition < seccionBottom) {
      var enlaceId = seccion.getAttribute('id');
      var enlace = document.querySelector('a[href="#' + enlaceId + '"]');

      enlaces.forEach(function (enlace) {
        enlace.classList.remove('active');
      });
      enlace.classList.add('active');
    }
  });
}

window.addEventListener('scroll', resaltarEnlaceActivo);

