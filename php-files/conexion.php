<?php

// Conexión
$servidor = '35.238.214.160';
$usuarioBD = 'arnold';
$password = 'Guardiania$2020';
$basededatos = 'bd_sac';
$conexion = mysqli_connect($servidor, $usuarioBD, $password, $basededatos);
$conexion->set_charset("utf8");

if (!$conexion) {
    echo 'Error en conexión';
}


// Iniciar la sesión


