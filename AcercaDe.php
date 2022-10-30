<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background: #000000;
            background: -webkit-linear-gradient(to left, #434343, #000000);
            background: linear-gradient(to left, #434343, #000000);
        }
    </style>
</head>

<body>
    <div class="card bg-dark text-white" style="margin: 50px;">
        <img src="img/Portada.jpeg" class="card-img" style="border: 10%; height: 400px;">
        <div class="card-img-overlay">
            <h5 class="card-title">CERIFICUAATES</h5>
            <p class="card-text">Con esta pagina vas a poder conseguir diferentes certificados, con unos simples examenes de 8 preguntas, para que puedas demostrar como estudiante, trabajador o solo por gusto que si sabes programar</p>
        </div>
    </div>
    <div class="card mb-3" style="margin: 100px;">
        <h2 style="text-align: center;"> CONOCE MAS</h2>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/Estudiante.jpg" alt="..." style="height:190px; width:300px; border: 5px solid black; margin: 5px 5px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">ALUMNO</h5>
                    <p class="card-text">ESTO PUEDE DEMOSTRA QUE ERES UN GRAN ESTUDIANTE Y QUE APRENDISTE DE TU PROFESOR</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/Progra.jpg" alt="..." style="height:190px; width:300px; border: 5px solid black; margin: 5px 5px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">EMPLEADO</h5>
                    <p class="card-text">CON LOS CERTIFICADOS QUE TENEMOS PODRAS PEDIR UN AUMENTO O TENER MAS EXPERIENCIA PARA OTROS TRABAJOS</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/Trabajador.jpg" alt="..." style="height:190px; width:300px; border: 5px solid black; margin: 5px 5px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">OTROS CERTIFICADOS</h5>
                    <p class="card-text">PUEDES ENCONTRAR OTROS CERTIFICADOS AQUI <a href="https://education.oracle.com/oracle-certification-paths-all?intcmp=WWOUOCOMCERTFEATURESTORY">NUEVOS CERTIFICADOS</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <header>
        <?php
            include ("header.html");
        ?>
    </header>
    <?php
        include ("Footer.html");
    ?>
</body>
</html>