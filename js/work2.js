"use strict"

//lightbox

var container = document.getElementById("container");
var lightbox = document.getElementById("lightbox");
var overlay = document.getElementById("overlay");
var lightboxControl = document.getElementById("lightbox-control");


function clickImage(event) {
	console.log("Click en una imagen");
	var img = event.target;

	var imgSrc = img.src;
	console.log("La imagen es: "+imgSrc);

	var lightboxImgList = lightbox.getElementsByClassName("image");
	var lightboxImg = lightboxImgList[0];
	lightboxImg.src = imgSrc;	

	var imgParent = img.parentElement;

	var imgText = imgParent.getElementsByClassName("text")[0];
	var imgDes = imgParent.getElementsByClassName("descripcion")[0];
	console.log("imgText: "+imgText.innerText);

	var lightboxText = lightbox.getElementsByClassName("text")[0];
	var lightboxDes = lightbox.getElementsByClassName("descripcion")[0];

	lightboxDes.innerText = imgDes.innerText;
	lightboxText.innerText = imgText.innerText;

	lightboxControl.classList.remove("hide");
}

overlay.onclick = function() {
	console.log("Click en overlay");
	lightboxControl.classList.add("hide");
}
lightbox.onclick = function() {
	console.log("Click en lightbox");
	lightboxControl.classList.add("hide");
}


var images = container.getElementsByTagName("img");
var numImages = images.length;
console.log("Hay "+numImages+" images");

for (var i=0; i<numImages; i++) {
	var image = images[i];

	image.onclick = clickImage;
}