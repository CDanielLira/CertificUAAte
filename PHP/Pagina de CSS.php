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
    <h5 class="card-title">CSS</h5>
    <p class="card-text">EL CERTIFICADO DE CSS TODAVIA ESTA EN CURSO </p>
    <h3>GRACIAS POR VISITAR NUESTRA PAGINA</h3>
    <p>El conocimiento es poder, especialmente en el mercado de trabajo actual. Documentación de sus habilidades le permite avanzar en su carrera, o ayudarle a comenzar una nueva.
    Con este curso de CSS3 aprenderás a darle un aspecto único, personalizado y más atractivo tus páginas web por medio de la creación de animaciones y de tus propios efectos interactivos</p>
    <p>Consta de 8 simples preguntas en un tiempo de 10 min en el que para aprobar deberas contestar correctamente al menos cinco de ellas.</p>
    <p>El costo es de 50 pesos y esta disponible siempre que se quiera aplicar.</p>
  </div>
  <img src="img/CSS.jpg" class="card-img-bottom" alt="..." height="350px;">
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