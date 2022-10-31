<?php

    session_start();

    $Usuario = $_SESSION["usuario"];
    $Modificar = "true";

$archivo = "../cuentas.txt";
$data = file_get_contents($archivo);

$palabra = 'false';
$sustitucion = 'true';
$datosnuevos = str_replace($palabra, $sustitucion, $data);
file_put_contents($archivo, $datosnuevos."\n");
?>