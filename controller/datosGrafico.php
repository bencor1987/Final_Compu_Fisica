<?php

require '../php-files/conexion.php';

$sql = "SELECT temperatura FROM registro_covid";
$solicitar = mysqli_query($conexion, $sql);
while ($vector = mysql_fetch_row($query)) {
    $lista = $vector[0];
    echo $lista;
}

