<?php
 
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["contra"];

 
$file=fopen("cuentas.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
      $user = $aux[2];
      $contrasena = $aux[3];
     
      if ($user===$usuario && $contrasena === $palabra_secreta){            
            $band=1; break;
     }
    }
}   
fclose($file);

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($band==1){
     
    session_start();
    $micarrito=[];
     
    $_SESSION["usuario"] = $usuario;
    $_SESSION["compras"] = $micarrito;

    # Luego redireccionamos a la pagina "Secreta"
    header("Location: http://localhost/cursophp/CertificUAAte-main/index.php");
    }else{
    header("Location: http://localhost/cursophp/CertificUAAte-main/formlog.php?valida=false");
    }
 
?>
