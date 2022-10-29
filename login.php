<?php
 
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

 
$file=fopen("cuentas.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
      $user = $aux[0];
      $contrasena = $aux[1];
     
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
    header("Location: secreta.php");
    }else{
    htmlspecialchars($_SERVER['PHP_SELF']);
    <div class="alert alert-danger" role="alert">
        Usuario o contrasena no validos!
    </div>
 
?>
