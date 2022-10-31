<?php
if (empty($_SESSION["usuario"])) {
    header("Location: http://localhost/cursophp/CertificUAAte-main/PHP/formlog.php");
    exit();
}


$file=fopen("../cuentas.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
      $user = $aux[2];
     
      if ($user===$_SESSION["usuario"]){
          $pago = $aux[4];
          $band=1; break;
     }
    }
}   
fclose($file);

if($pago=="false"){
    header("Location: http://localhost/cursophp/CertificUAAte-main/PHP/Pago.php");
} 
else{
    header("Location: "); #Direccion de examen;
}
?>