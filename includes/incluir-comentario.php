<?php

if (isset($_POST['includeComentPub'])) {

    $comentario = $_POST['comentario'];
    $nombreUsuario = $_POST['nombre'];
    $correo = $_POST['correo'];

    $id = uniqid();

    include('conectarBD.php');

    $instruccion = "INSERT INTO `comentarios` (`id`, `nombre`, `comentario`, `correo`) VALUES (NULL, '$nombreUsuario', '$comentario', '$correo')";
    mysqli_query($conexion, $instruccion) or die("Fallo en la consulta");
}

if (isset($_POST['includeComentAnon'])) {

    $comentario = $_POST['comentario'];

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

    $instruccion2 = "INSERT INTO `comentarios` (`id`, `nombre`, `comentario`, `correo`) VALUES (NULL, '$nombreUsuario', '$comentario', NULL)";
    mysqli_query($conexion, $instruccion2) or die("Fallo en la consulta");
}


header("Location: ../que_somos.php#comentarios");
