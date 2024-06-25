"use strict"

//overlay

var overlay = document.getElementById("workOverlay");
var overlay1 = document.getElementById("workOverlay1");
var overlay2 = document.getElementById("workOverlay2");
var overlay3 = document.getElementById("workOverlay3");
var work = document.getElementById("work");
var work1 = document.getElementById("work1");
var work2 = document.getElementById("work2");
var work3 = document.getElementById("work3");

work.onmouseenter = function() {
    console.log("Hola");
    overlay.style.display = "block";
}
work.onmouseleave = function() {
    console.log("Adios");
    overlay.style.display = "none";
}
work1.onmouseenter = function() {
    console.log("Hola");
    overlay1.style.display = "block";
}
work1.onmouseleave = function() {
    console.log("Adios");
    overlay1.style.display = "none";
}
work2.onmouseenter = function() {
    console.log("Hola");
    overlay2.style.display = "block";
}
work2.onmouseleave = function() {
    console.log("Adios");
    overlay2.style.display = "none";
}
work3.onmouseenter = function() {
    console.log("Hola");
    overlay3.style.display = "block";
}
work3.onmouseleave = function() {
    console.log("Adios");
    overlay3.style.display = "none";
}
