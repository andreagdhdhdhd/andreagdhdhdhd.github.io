"use strict";

document.addEventListener("DOMContentLoaded", function(event) {
    var starsContainer = document.getElementById("stars-container");
    var stars = [];

    document.addEventListener("mousemove", function(event) {
        var numStars = 3; // Número de estrellas en el rastro

        for (var i = 0; i < numStars; i++) {
            var star = document.createElement("div");
            star.className = "star";
            var posX = event.pageX + getRandomNumber(-5, 5); // Aplica una variación aleatoria en el eje X
            var posY = event.pageY + getRandomNumber(-5, 5); // Aplica una variación aleatoria en el eje Y
            star.style.left = (posX - 5) + "px";
            star.style.top = (posY - 5) + "px";
            starsContainer.appendChild(star);
            stars.push(star);

            setTimeout(function() {
                star.style.opacity = "0";
            }, 40);
        }
    });

    function removeStar(star) {
        star.remove();
        stars.splice(stars.indexOf(star), 1);
    }

    setInterval(function() {
        if (stars.length > 0) {
            var starToRemove = stars[0];
            removeStar(starToRemove);
        }
    }, 10);

    function getRandomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }
});
