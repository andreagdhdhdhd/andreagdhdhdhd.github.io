<?php
include("includes/conectarBD.php");

$sql = "SELECT * FROM `comentarios`";
$resultado = $conexion->query($sql);
?>
<h2 style="margin-top: 100px;">Comentarios</h2>
<script>
    function mostrarFormulario(index) {
        var botonResPub = document.querySelector("#botonResPub-" + index);
        var formulario = document.querySelector("#formularioResPub-" + index);

        if (formulario.style.display === "inline-block") {
            formulario.style.display = "none";
            botonResPub.classList.remove("hide");
            botonResPub.style.cursor = "pointer";
            botonResPub.style.backgroundColor = "";

        } else {
            formulario.style.display = "inline-block";
            botonResPub.classList.add("hide");
            botonResPub.style.cursor = "default";
            botonResPub.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
        }
    }
</script>
<?php
$i = 0;
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $nombre = $fila['nombre'];
        $comentario = $fila['comentario'];
        $correo = $fila['correo'];
        $idComentario = $fila['id'];
        $fecha_publicacion = $fila['fecha_publicacion'];

        // Mostrar los comentarios
        echo '
        <div class="contenido">
            <div class="texto">
                <p><b style="font-weight: 500; color: white;">', $nombre, '</b> ', $correo, '  <p style="margin-left: 400px; margin-top: -30px; text-align: right;">', $fecha_publicacion, '</p></p>
            </div>
            <div class="texto2">
            ', $comentario, '
            </div>
        ';
        echo '
            <div class="response" style="position: relative; margin-bottom: 20px;">
                <img style="width: 14px; position: absolute; top: 18px;" src="images/responseIcon.png">
                <p class="buttonResponse" style="font-size: 14px; text-align: right; position: absolute; top: 15px; left: 15px; cursor: pointer;">Responder</p>
                <br>
                <div class="formResponseContainer">
                    <div class="formResponse" style="margin-left: 50px; margin-top: 30px;">
                        <form action="includes/incluir-respuesta.php" method="POST" name="form">
                            <textarea id="respuestaId" name="respuesta" rows="4" cols="30"></textarea>
                            <input type="hidden" name="idComentario" value="' . $idComentario . '"/>
                            <br>
                            <div class="buttonContainer">
                                <input class="boton" style="font-size: 16px; width: 250px; margin-bottom: -20px; margin-right: 12px;" type="submit" name="includeRespuestaAnon" value="Publicar respuesta anónima" class="button"/>
                                <button class="botonResPub" id="botonResPub-' . $i . '" style="font-size: 16px; width: 250px; margin-bottom: -20px;" type="button" onclick="mostrarFormulario(' . $i . ')">Publicar respuesta pública</button>
                            </div>   
                                <div class="formularioResPub" id="formularioResPub-' . $i . '" style="display: none; margin-top: 30px;">
                                    <input class="rellenar" style="width: 225px; margin-right: 20px;" type="text" placeholder="Nombre" name="nombre">
                                    <input class="rellenar" style="width: 227px;" type="email" placeholder="Correo electrónico" name="correo">
                                    <input type="hidden" name="idUsuario" value=""/>
                                    <br>
                                    <input class="boton" style="font-size: 16px; width: 250px;" type="submit" name="includeRespuestaPub" value="Responder públicamente" class="button"/>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ';

        $i++;

    $instruccion2 = "SELECT * FROM `respuestas` WHERE `idComentario`= '$idComentario'";
    $resultadoConsulta2 = mysqli_query($conexion, $instruccion2) or die("Fallo en la consulta");

    while ($fila2 = mysqli_fetch_assoc($resultadoConsulta2)) {

        echo '

    <div class="contenido" style="margin-left: 50px;">
        <div class="texto">
            <p><b style="font-weight: 500; color: white;">', $fila2['nombre'], '</b> ', $fila2['correo'], '  <p style="margin-left: 400px; margin-top: -30px; text-align: right;">', $fila2['fechaHora'] , '</p></p>
        </div>
        <div class="texto2">
            ', $fila2['respuesta'] , '
        </div>
    </div>
    ';
    }
}
} else {
    echo "No hay comentarios aún.";
}
?>

<script>
    var botonesRespuesta = document.querySelectorAll(".buttonResponse");

    botonesRespuesta.forEach(function(boton) {
        boton.addEventListener("click", function() {
            var formResponseContainer = this.parentElement.querySelector(".formResponseContainer");
            var formResponse = formResponseContainer.querySelector(".formResponse");
            formResponse.classList.toggle("hide");
        });
    });
</script>