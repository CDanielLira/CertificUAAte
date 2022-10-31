<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXAMEN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/ExamenStyle.css">
</head>
<body>
    
    <?php
        session_start();
        error_reporting(0); 
        include ("header.php");
        echo '<br><br><br>';
        echo '<h2 class="titulo">Examen de certificacion</h2>';
        echo '<form action="resultados.php" method="post">';
          echo '<br>';
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[1].'</label><br>';
              echo '<br>';
              $opcion = $final1[1];
              $op = buscaOpciones($opcion);
              $_SESSION['r1'] = buscaCorrecta($op);
              $_SESSION['opf'] = buscaIncisos($op);

              echo '<input type="radio" name="p1" required value="0">';
              echo '<label class="incisos" for="p1-0">'.$_SESSION['opf']['0'].'</label><br>';
              echo '<input type="radio" name="p1" required value="1">';
              echo '<label class="incisos" for="p1-1">'.$_SESSION['opf']['1'].'</label><br>';
              echo '<input type="radio" name="p1" required value="2">';
              echo '<label class="incisos" for="p1-2">'.$_SESSION['opf']['2'].'</label><br>';
          echo '</div> ';
    
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[2].'</label><br>';
              echo '<br>';
              $opcion = $final1[2];
              $op = buscaOpciones($opcion);
              $_SESSION['r2'] = buscaCorrecta($op);
              $_SESSION['opf2'] = buscaIncisos($op);

              echo '<input type="radio" name="p2" required value="0">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['0'].'</label><br>';
              echo '<input type="radio" name="p2" required value="1">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['1'].'</label><br>';
              echo '<input type="radio" name="p2" required value="2">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['2'].'</label><br>';

          echo '</div> ';
    
        
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[3].'</label><br>';
              echo '<br>';
              $opcion = $final1[3];
              $op = buscaOpciones($opcion);
              $_SESSION['r3'] = buscaCorrecta($op);
              $_SESSION['opf3'] = buscaIncisos($op);

              echo '<input type="radio" name="p3" required value="0">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['0'].'</label><br>';
              echo '<input type="radio" name="p3" required value="1">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['1'].'</label><br>';
              echo '<input type="radio" name="p3" required value="2">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['2'].'</label><br>';

          echo '</div> ';
    
          
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[4].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[4];
              $op = buscaOpciones($opcion);
              $_SESSION['r4']= buscaCorrecta($op);
              $_SESSION['opf4'] = buscaIncisos($op);

              echo '<input type="radio" name="p4" required value="0">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['0'].'</label><br>';
              echo '<input type="radio" name="p4" required value="2">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['1'].'</label><br>';
              echo '<input type="radio" name="p4" required value="3">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['2'].'</label><br>';
          echo '</div> ';
    
        
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[5].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[5];
              $op = buscaOpciones($opcion);
              $_SESSION['r5'] = buscaCorrecta($op);
              $_SESSION['opf5'] = buscaIncisos($op);

              echo '<input type="radio" name="p5" required value="0">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['0'].'</label><br>';
              echo '<input type="radio" name="p5" required value="1">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['1'].'</label><br>';
              echo '<input type="radio" name="p5" required value="2">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['2'].'</label><br>';
          echo '</div> ';
    
    
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[6].'</label><br>';
              echo '<br>';
              $opcion = $final1[6];
              $op = buscaOpciones($opcion);
              $_SESSION['r6'] = buscaCorrecta($op);
              $_SESSION['opf6'] = buscaIncisos($op);

              echo '<input type="radio" name="p6" required value="0">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['0'].'</label><br>';
              echo '<input type="radio" name="p6" required value="1">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['1'].'</label><br>';
              echo '<input type="radio" name="p6" required value="2">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['2'].'</label><br>';
          echo '</div> ';
    
        
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[7].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[7];
              $op = buscaOpciones($opcion);
              $_SESSION['r7'] = buscaCorrecta($op);
              $_SESSION['opf7'] = buscaIncisos($op);

              echo '<input type="radio" name="p7" required value="0">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['0'].'</label><br>';
              echo '<input type="radio" name="p7" required value="1">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['1'].'</label><br>';
              echo '<input type="radio" name="p7" required value="2">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['2'].'</label><br>';
          echo '</div> ';
    
            
          echo '<div class="pregresp">';
              echo '<label id="preg">'.$final1[8].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[8];
              $op = buscaOpciones($opcion);
              $_SESSION['r8'] = buscaCorrecta($op);
              $_SESSION['opf8'] = buscaIncisos($op);

              echo '<input type="radio" name="p8" required value="0">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['0'].'</label><br>';
              echo '<input type="radio" name="p8" required value="1">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['1'].'</label><br>';
              echo '<input type="radio" name="p8" required value="2">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['2'].'</label><br>';
          echo '</div> ';
    
        echo '<input type="submit" value="Finalizar" style=color:red; />';
        echo '</form> ';
    echo '<br><br>';
    include ("../HTML/Footer.html");
    ?>
</body>
</html>








