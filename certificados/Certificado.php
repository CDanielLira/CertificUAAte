<?php

    session_start();

    $today = getdate();
    $Name1 = $_SESSION["Nombre"];
    $Name1 = strtr($Name1, "_", " ");
    $Name = $Name1;
    $Curso = 'Curso de C++';
    $Fecha1 = $today['mday']."/".$today['mon']."/".$today['year'];
    $Fecha = $Fecha1;
    $Instructor = 'CERTIFICUUATE';
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Certificado Base </title>

    <style>
        .Bloque {
            
            width: 88%;
            padding: 25px;
            margin: 25px auto;
            border: solid 20px black;
            
        }

        .TituloCert {

            font-style: italic;
            font-weight: bold;
            font-size: 1.75em;
            padding: 20px;
            text-align: center;
        }

        .Logo {

            position: relative;
            text-align: center;
        }

        .Cuerpo {

            width: 100%;
            text-align: center;
        }

        .NombreUser {

            font-size: 2em;
            font-style: italic;
            font-weight: bold;
        }
        
        .NombreCurso {

            font-size: 1.25em;
            font-style: italic;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <div class="Bloque">

        <h1 class="TituloCert"> - CERTIFICADO - </h1>

        <div>
            <table class="Cuerpo">

                <tr>
                    <td colspan="2">Por medio de la presente, la empresa "certificUAAte" concede a:</td>
                    <td><br><br><br></td>
                </tr>
                <tr>
                    <td colspan="2" class="NombreUser"> <?php echo $Name ?> </td>
                    <td><br><br><br></td>
                </tr>
                <tr>
                    <td colspan="2"> El presente reconocimiento por haber aprobado el curso: </td>
                    <td><br><br><br></td>
                </tr>
                <tr>
                    <td colspan="2" class="NombreCurso"> <?php echo $Curso ?> </td>
                    <td><br><br><br></td>
                </tr>
                <tr>
                    <td colspan="2"> Impartido por el Instructor(a): <span style="font-style: italic; font-size: 1.25em; font-weight: bold"><?php echo $Instructor ?></span></td>
                    <td><br><br></td>
                </tr>
                <tr>
                    <td colspan="2"> Y finalizado en Aguascalientes, el dia: <?php echo $Fecha ?> </td>
                </tr>
                <tr>
                    <td>Firma Instructor del Curso:</td>
                    <td>Firma Director "certificUAAte":</td>
                    <td><br><br><br></td>
                </tr>
                <tr>
                    <td><br><br><br></td>
                </tr>

            </table>
        </div>
    </div>

</body>

</html>
