"use strict"

        var body = document.getElementsByTagName("body")[0];
		var menu = document.getElementById("menu");
        var menuPanel = document.getElementById("menu-panel");
        var menu2 = document.getElementById("menu2");
        var flecha = document.getElementById("flechaWork");
        var bars = document.getElementById("bars");


		bars.onclick = function() {
			console.log("Click en el menu");
			menu.classList.toggle("visible");
			 if (menu.classList.contains("visible")) {
				 body.style.overflow = "hidden";
			 }
			 else {
				 body.style.overflow = "initial";
			 }
        }
        flecha.onclick = function() {
            console.log("Click en el menu2");
            menuPanel.classList.toggle("hidden");
			 if (menuPanel.classList.contains("hidden")) {
				 menu2.style.display = "block";
			 }
			 else {
                menu2.style.display = "none";
			 }
        }