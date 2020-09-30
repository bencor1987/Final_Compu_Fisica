<?php

require '../php-files/conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT usuario, clave FROM usuarios WHERE usuario = '$usuario' "
        . "and clave = '$clave'";

$resultado = mysqli_query($conexion, $consulta);

echo $filas = mysqli_num_rows($resultado);

$_SESSION['user'] = $usuario;

mysqli_free_result($resultado);
mysqli_close($conexion);




