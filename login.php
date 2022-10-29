<?php
// Las claves de acceso, por lo pronto aquiahorita las ponemos aquí
  
$usuario_correcto = "isc5";
$palabra_secreta_correcta = "uaa";
 
 
//Nota: no estamos haciendo validaciones
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

//Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
     
    session_start();
    
    $_SESSION["usuario"] = $usuario;

    //Luego redireccionamos a la página secreta.php
    header("Location: secreta.php");
} else {
    //No coinciden, así que simplemente imprimimos un
    // mensaje diciendo que es incorrecto
    echo "<div>El usuario o la contraseña son incorrectos</div>";
}

?>


<style>
 div{
            margin:50px;
            font-size:25px;
        }
</style>
