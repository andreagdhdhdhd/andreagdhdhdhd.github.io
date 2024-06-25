<head>
	<title>Comentarios</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<!-- Tipografías -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<script>
		function mostrarFormulario1() {
			var botonPublico = document.getElementById("boton-publico");
			var formulario = document.getElementById("formulario");

			if (formulario.style.display === "block") {
				formulario.style.display = "none";
				botonPublico.classList.remove("mostrar");
				botonPublico.style.cursor = "pointer";
				botonPublico.style.backgroundColor = "";
			
			} else {
				formulario.style.display = "block";
				botonPublico.classList.add("mostrar");
				botonPublico.style.cursor = "default";
				botonPublico.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
			}
		}
	</script>
</head>
<?php
include("includes/conectarBD.php");
?>
<h1>Comparte tus sentimientos</h1>
<p style="margin-top: 30px; margin-bottom: 30px;">Este es un espacio en el que podéis preguntar o compartir experiencias que puedan servir a alguien más de ayuda o simplemente para desahogarse. Es un espacio seguro en el que puedes comentar tanto de manera pública como de manera anónima. La diferencia es que en la manera pública puedes poner tu nombre y correo electrónico, para que el resto de usuarios tenga la posibilidad de ponerse en contacto contigo por lo comentado. 
	<br><br>Si se encuentra cualquier tipo de comentario ofensivo o juzgando a otros será eliminado inmediatamente.
</p>
<form style="text-align: left;" action="includes/incluir-comentario.php" method="POST" name="form">
	<textarea name="comentario" id="comentarioId" class="comentario" cols="30" rows="10"></textarea>
	<br>
	<input class="boton" type="submit" name="includeComentAnon" value="Compartir de manera anónima" class="button" />
	<br>
	<button type="button" id="boton-publico" class="boton" onclick="mostrarFormulario1()">Compartir de manera pública</button>
	<div id="formulario" class="formulario" style="display: none;">
		<input class="rellenar" style="margin-right: 20px;" type="text" placeholder="Nombre" name="nombre">
		<input class="rellenar" style="width: 300px;" type="email" placeholder="Correo electrónico" name="correo">
		<input type="hidden" name="idUsuario" value="" />
		<br>
		<input class="boton" type="submit" name="includeComentPub" value="Compartir" class="button" />
	</div>
</form>
<?php
include("includes/mostrar-comentario.php");
?>