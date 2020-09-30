<?php

require '../php-files/conexion.php';

$id = $_POST['id'];
$usuario = $_POST['nombreA'];
$correo = $_POST['correoA'];
$clave = $_POST['claveA'];

$sql = "UPDATE usuarios set usuario = '$usuario', correo = '$correo', clave = '$clave' WHERE id = $id";

echo $request = mysqli_query($conexion, $sql);

mysqli_close($conexion);