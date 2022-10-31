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

                        <a href="Pago2.php"><input type="submit" class="form-control" value="Enviar"></a>

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
