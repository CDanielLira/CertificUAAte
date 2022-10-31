<?php

    session_start();

    $Usuario = $_SESSION["usuario"];
    $Modificar = "true";
    $file = fopen("../cuentas.txt", "r+");

    while(!feof($file)){
        
        $linea = fgets($file);
        
        if ($linea != ""){
            
            $aux=preg_split("/[\s,]+/",$linea);   
            $user = $aux[2];
     
            if ($user === $Usuario){ 
                
                fwrite($file, $aux[4] = $Modificar);
            }
        }
    }

    fclose($file);

    }

?>