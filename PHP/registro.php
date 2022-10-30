<?php
     
    $nom = $_POST['nombre'] .' '. $_POST['apellido'];
    $nom = strtr($nom," ", "_");
    $email = $_POST['correo1'];
    
    $usuario = $_POST["usuario"];
    $contra = $_POST["pass"];
     
    $file = fopen("cuentas.txt","a+");
     
    fwrite($file, $nom." ".$email." ".$usuario." ".$contra." false 0.0\n");
    
    fclose($file);
    $valida =true;
    header("Location: http://localhost/cursophp/CertificUAAte-main/formreg.php?valida=true");
?>
