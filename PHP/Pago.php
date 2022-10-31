<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pago de Curso</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/EstilosPago.css">

</head>

<body>

    <div class="Bloque">

        <h2> - PAGO DEL CURSO - </h2>

        <form action="">

            <table class="Cuerpo">

                <tr>

                    <td class="Datos">
                        <div class="form-group">
                            <label for="Nombre"> Número de Tarjeta: </label>
                            <input type="number" class="form-control" max="9999999999999999" id="NumTajeta" name="NumTarjeta">
                        </div>
                    </td>

                    <br><br>

                    <td class="Datos">
                        <div class="form-group">
                            <label for="Banco"> Banco: </label>
                            <select class="form-control" id="Banco" name="Banco">
                                <option value="BBVA">BBVA</option>
                                <option value="SANT">SANTANDER</option>
                                <option value="HSBC">HSBC</option>
                                <option value="CITI">CITIBANAMEX</option>
                                <option value="BANO">BANORTE</option>
                                <option value="SCOT">SCOTIABANK</option>
                            </select>
                        </div>
                    </td>

                </tr>

                <tr>

                    <td class="Datos">
                        <div class="form-group">

                            <label for="Banco"> Fecha de Vencimiento: </label>
                            <input type="month" class="form-control" id="FechaVen" name="FechaVen">

                        </div>
                    </td>

                    <td class="Datos">

                        <div class="form-group">

                            <label for="Pass">Código de Verificación: </label><br>
                            <input type="password" maxlength="3" class="form-control" id="CodVer" name="CodVer">

                        </div>

                    </td>
                </tr>

                <tr>

                    <td colspan="2" style=" padding-right: 1500px;">

                        <div class="form-group">

                            <input type="submit" class="form-control" value="Enviar">

                        </div>

                    </td>


                </tr>

            </table>

        </form>

    </div>

    <header>
        <?php
            include ("header.php");
        ?>
    </header>
    <?php
        include ("../HTML/Footer.html");
    ?>

</body>

</html>

<?php 

    // VARIABLES DEL FORMULARIO (DECLARACION EN PHP) ---------------------------------------------------------------------------------

    $BANCO = $FECHA_VEN = $COD_VER = ""; 
    $NUM_TARJETA = 0;

// FUNCIONES DE FILTRADO E INGRESO DE DATOS --------------------------------------------------------------------------------------

    function Filtrado($Datos) {

        $Datos = trim($Datos); // Elimina espacios antes y después de los datos
        $Datos = stripslashes($Datos); // Elimina backslashes \
        $Datos = htmlspecialchars($Datos); // Traduce caracteres especiales en entidades HTML
        return $Datos;
    }

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $NUM_TARJETA = Filtrado($_POST["NumTarjeta"]);
        $BANCO = Filtrado($_POST["Banco"]);
        $FECHA_VEN = Filtrado($_POST["FechaVen"]);
        $COD_VER = Filtrado($_POST["CodVer"]);
    }

       
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
