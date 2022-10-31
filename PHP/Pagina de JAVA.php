<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        h5,p,h3{
            color: black;
            text-align: center;
        }
        .card{
            border: solid black 3px;
            margin: 20px;
        }
        body {
            background: #000000;
            background: -webkit-linear-gradient(to left, #434343, #000000);
            background: linear-gradient(to left, #434343, #000000);
        }
        img{
            border: solid #777777 2px;
        }
    </style>
</head>
<body>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">JAVA</h5>
    <p class="card-text">EL CERTIFICADO DE JAVA TODAVIA ESTA EN CURSO </p>
    <h3>GRACIAS POR VISITAR NUESTRA PAGINA</h3>
    <p>Java, es utilizado desde móviles hasta electrodomésticos por lo que se convierte en uno de los lenguajes más utilizados en la actualidad a nivel mundial. Conocer y manejar este lenguaje informático te permitirá crear aplicaciones y procesos en una diversa gama de dispositivos.
    Con los conocimientos impartidos por Netec usted podrá aportar rendimiento, seguridad y estabilidad a las aplicaciones, podrá además minimizar costos de implementación, monitoreo y mantenimiento</p>
    <p>Consta de 8 simples preguntas en un tiempo de 10 min en el que para aprobar deberas contestar correctamente al menos cinco de ellas.</p>
    <p>El costo es de 50 pesos y esta disponible siempre que se quiera aplicar.</p>
  </div>
  <img src="img/JAVA.jpg" class="card-img-bottom" alt="..." height="350px;">
</div>
   <header>
        <?php
            include ("header.php");
        ?>
    </header>
    <?php
        include ("Footer.html");
    ?>
    
</body>
</html>