<!DOCTYPE html>
<html>

<head>
	<title>Serenity</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="icon" type="image/png" href="images/icono.png" />
	<!-- Tipografías -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<script src="scroll/dist/smooth-scroll.min.js"></script>
</head>

<body style='background-image: url(images/fondoDoble.png); background-size: 100%; background-attachment: fixed;'>
	<?php
	include("includes/navegacion.php");
	include("includes/conectarBD.php");
	?>
	<div class='container'>
		<div class="content" id="somos">
			<h1>¿Qué es Serenity?</h1>
			<p style="margin-top: 30px;"> Serenity es un proyecto realizado con la intención de poder ayudar de alguna manera a personas que tienen ansiedad o a cualquier persona que quiera entender y/o ayudar a otras que sí la tienen. A partir de esto, hay que dejar claro que este es un proyecto individual de una estudiante de diseño con ansiedad que, al saber por lo que se pasa, quiere que las personas que no pueden optar por ayuda profesional puedan encontrar un sitio seguro en el que se sientan entendidos y confortados. Además de intentar hacer ver la ansiedad de una manera más humana a diferencia de lo que se puede ver al buscar por Internet, y que, con esto, las personas puedan entenderla mejor, ser más conscientes de por lo que pasa una persona que tiene esta y estar más informados sobre el tema.
				<br><br>Aun siendo estas las intenciones, cabe recalcar que en esta página no somos profesionales ni tenemos estudios oficiales de psicología, solo tenemos nuestras experiencias con la ansiedad. Se habla en plural debido a que se ha trabajado con más personas con ansiedad para tener más información sobre cómo puede sentirse desde cada punto de vista y tener más perspectivas. Debido a esto, la mayoría de la información en esta página será subjetiva, pero también teniendo en cuenta información que nos han dado profesionales. Seguimos aprendiendo y esperamos que aprendáis con nosotros también. 
			</p>
		</div>
		<div class="content" id="consejos">
			<?php
			include("consejos.php");
			?>
		</div>
		<div class="content" id="consejos_alguien">
			<?php
			include("consejos_para_alguien.php");
			?>
		</div>
		<div class="content" id="comentarios">
			<?php
			include("comentarios.php");
			?>
		</div>
		<div class="content" id="preguntas">
			<?php
			include("preguntas.php");
			?>
		</div>
		<div class="content" id="recomendaciones" style="padding-bottom: 150px;">
			<?php
			include("recomendaciones.php");
			?>
		</div>
		<?php
	include("includes/footer.php");
	?>
	</div>
	<script src="js/resaltar.js"></script>
	<script>
		var scroll = new SmoothScroll('a[href*="#"]', {
			speed: 1200,
			speedAsDuration: true
		});
	</script>
</body>

</html>