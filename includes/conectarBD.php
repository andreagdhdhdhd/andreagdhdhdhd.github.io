<?php
$user = 'root';
$password = '';
$bd = 'serenity';
$host = 'localhost';
$port = 3306;

$conexion = mysqli_connect($host, $user, $password, $bd, $port);// or die ("fallo en el acceso a la base de datos");
/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
    /* mostrar información del host */
    // printf("Host info: %s\n", mysqli_get_host_info($conexion));
}

?>