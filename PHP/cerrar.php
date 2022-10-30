<?php


session_start();

 
$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: http://localhost/cursophp/CertificUAAte-main/");
?>
