<?php

require '../php-files/conexion.php';

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "INSERT INTO usuarios (usuario, correo, clave) VALUES ('$usuario', '$correo', '$clave')";

echo $request = mysqli_query($conexion, $sql);

mysqli_close($conexion);


