<?php

if (isset($_POST['includeRespuestaPub'])) {

    $respuesta = $_POST['respuesta'];
    $nombreUsuario = $_POST['nombre'];
    $correo = $_POST['correo'];
    $idComentario = $_POST['idComentario'];

    $id = uniqid();

    include('conectarBD.php');

    $instruccion = "INSERT INTO `respuestas` (`idRespuesta`, `idComentario`, `nombre`, `correo`, `respuesta`) VALUES (NULL, '$idComentario', '$nombreUsuario', '$correo', '$respuesta')";
    mysqli_query($conexion, $instruccion) or die("Fallo en la consulta1");
}

if (isset($_POST['includeRespuestaAnon'])) {

    $respuesta = $_POST['respuesta'];
    $idComentario = $_POST['idComentario'];

    $id = uniqid();

    include('conectarBD.php');

    $sql = "SELECT COUNT(*) as total FROM 
    (SELECT `nombre` FROM `comentarios` WHERE `nombre` LIKE 'Anónimo%'
     UNION ALL
     SELECT `nombre` FROM `respuestas` WHERE `nombre` LIKE 'Anónimo%') AS anonimos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $contador = $fila['total'] + 1;
        $nombreUsuario = 'Anónimo' . $contador;
    } else {
        $nombreUsuario = 'Anónimo1';
    }

    $instruccion = "INSERT INTO `respuestas` (`idRespuesta`, `idComentario`, `nombre`, `correo`, `respuesta`) VALUES (NULL, '$idComentario', '$nombreUsuario', NULL, '$respuesta')";
    mysqli_query($conexion, $instruccion) or die("Fallo en la consulta2");
}


header("Location: ../que_somos.php#comentarios");
