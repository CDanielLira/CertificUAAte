<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXAMEN FINAL JAVA</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos3.css">
    
    <style>
        #pregunta, #preg, #op{
            margin-left: 7%;
            margin-right: 5%;
        }
        
        
        #pregunta{
            color: #000000;
            font-weight: bold;
        }
        
        #preg{
            color: #000000;
        }
        
        form{
            margin-left: 7%;
            margin-right: 5%;
            background-color: #b1b1b1;
        }
        
        .titulo{
            margin-left: 7%;
            margin-right: 5%;
            font-family: fantasy;
            text-align: center;
        }
        
        .incisos{
            
        }
        
        #center{
            display: block;
            margin-left: auto;
            margin-right: auto;  
        }
        
        .pregresp {
            border: 2px solid #000000;
            padding: 10px;
            margin: 10px;
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    
</head>
<body>
    
    <?php
        session_start();
        error_reporting(0); 
    
        echo '<br><br><br>';
        echo "<p id='op'> <strong>INDICATIONS</strong>";
        echo "<p id='op'>Select the correct answer <br> Remember that you only have one chance if you leave the exam you will not be able to retake the exam. <br> Time: 20 minutes</p>";
        echo "<p id='op' style='color:red';>GOOD LUCK!</p>";
        
        echo '<h2 class="titulo"><img id="center" src="images/03_educacion.png" alt="">JAVA CERTIFICATION TEST</h2>';
        echo '<form action="resultados.php" method="post">'; //------------------------------------
          echo '<br>';
    
          //Pregunta 1
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 1</label><br>';
              echo '<label id="preg">'.$final1[1].'</label><br>';
              echo '<br>';
              $opcion = $final1[1];
              $op = buscaOpciones($opcion);
              $_SESSION['r1'] = buscaCorrecta($op);
              //$_SESSION["opf"] = array();
              $_SESSION['opf'] = buscaIncisos($op);

              echo '<input type="radio" name="p1" required value="0">';
              echo '<label class="incisos" for="p1-0">'.$_SESSION['opf']['0'].'</label><br>';

              echo '<input type="radio" name="p1" required value="1">';
              echo '<label class="incisos" for="p1-1">'.$_SESSION['opf']['1'].'</label><br>';

              echo '<input type="radio" name="p1" required value="2">';
              echo '<label class="incisos" for="p1-2">'.$_SESSION['opf']['2'].'</label><br>';
          echo '</div> ';
    
          //Pregunta 2
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 2</label><br>';
              echo '<label id="preg">'.$final1[2].'</label><br>';
              echo '<br>';
              $opcion = $final1[2];
              $op = buscaOpciones($opcion);
              $_SESSION['r2'] = buscaCorrecta($op);
              //$_SESSION["opf2"] = array();
              $_SESSION['opf2'] = buscaIncisos($op);

              echo '<input type="radio" name="p2" required value="0">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['0'].'</label><br>';

              echo '<input type="radio" name="p2" required value="1">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['1'].'</label><br>';

              echo '<input type="radio" name="p2" required value="2">';
              echo '<label class="incisos" for="p2">'.$_SESSION['opf2']['2'].'</label><br>';

          echo '</div> ';
    
          //Pregunta 3
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 3</label><br>';
              echo '<label id="preg">'.$final1[3].'</label><br>';
              echo '<br>';
              $opcion = $final1[3];
              $op = buscaOpciones($opcion);
              $_SESSION['r3'] = buscaCorrecta($op);
              //$_SESSION["opf3"] = array();
              $_SESSION['opf3'] = buscaIncisos($op);

              echo '<input type="radio" name="p3" required value="0">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['0'].'</label><br>';
              
              echo '<input type="radio" name="p3" required value="1">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['1'].'</label><br>';

              echo '<input type="radio" name="p3" required value="2">';
              echo '<label class="incisos" for="p3">'.$_SESSION['opf3']['2'].'</label><br>';

          echo '</div> ';
    
          //Pregunta 4
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 4</label><br>';
              echo '<label id="preg">'.$final1[4].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[4];
              $op = buscaOpciones($opcion);
              $_SESSION['r4']= buscaCorrecta($op);
              //$_SESSION["opf4"] = array();
              $_SESSION['opf4'] = buscaIncisos($op);

              echo '<input type="radio" name="p4" required value="0">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['0'].'</label><br>';

              echo '<input type="radio" name="p4" required value="2">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['1'].'</label><br>';

              echo '<input type="radio" name="p4" required value="3">';
              echo '<label class="incisos" for="p4">'.$_SESSION['opf4']['2'].'</label><br>';

          echo '</div> ';
    
          //Pregunta 5
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 5</label><br>';
              echo '<label id="preg">'.$final1[5].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[5];
              $op = buscaOpciones($opcion);
              $_SESSION['r5'] = buscaCorrecta($op);
              //$_SESSION["opf5"] = array();
              $_SESSION['opf5'] = buscaIncisos($op);

              echo '<input type="radio" name="p5" required value="0">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['0'].'</label><br>';

              echo '<input type="radio" name="p5" required value="1">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['1'].'</label><br>';

              echo '<input type="radio" name="p5" required value="2">';
              echo '<label class="incisos" for="p5">'.$_SESSION['opf5']['2'].'</label><br>';

          echo '</div> ';
    
          //Pregunta 6
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 6</label><br>';
              echo '<label id="preg">'.$final1[6].'</label><br>';
              echo '<br>';
              $opcion = $final1[6];
              $op = buscaOpciones($opcion);
              $_SESSION['r6'] = buscaCorrecta($op);
              //$_SESSION["opf6"] = array();
              $_SESSION['opf6'] = buscaIncisos($op);

              echo '<input type="radio" name="p6" required value="0">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['0'].'</label><br>';

              echo '<input type="radio" name="p6" required value="1">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['1'].'</label><br>';

              echo '<input type="radio" name="p6" required value="2">';
              echo '<label class="incisos" for="p6">'.$_SESSION['opf6']['2'].'</label><br>';

          echo '</div> ';
    
            //Pregunta 7
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 7</label><br>';
              echo '<label id="preg">'.$final1[7].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[7];
              $op = buscaOpciones($opcion);
              $_SESSION['r7'] = buscaCorrecta($op);
              //$_SESSION["opf5"] = array();
              $_SESSION['opf7'] = buscaIncisos($op);

              echo '<input type="radio" name="p7" required value="0">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['0'].'</label><br>';

              echo '<input type="radio" name="p7" required value="1">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['1'].'</label><br>';

              echo '<input type="radio" name="p7" required value="2">';
              echo '<label class="incisos" for="p7">'.$_SESSION['opf7']['2'].'</label><br>';

          echo '</div> ';
    
            //Pregunta 8
          echo '<div class="pregresp">';
              echo '<label id="pregunta">PREGUNTA 8</label><br>';
              echo '<label id="preg">'.$final1[8].'</label><br>'; 
              echo '<br>';
              $opcion = $final1[8];
              $op = buscaOpciones($opcion);
              $_SESSION['r8'] = buscaCorrecta($op);
              //$_SESSION["opf5"] = array();
              $_SESSION['opf8'] = buscaIncisos($op);

              echo '<input type="radio" name="p8" required value="0">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['0'].'</label><br>';

              echo '<input type="radio" name="p8" required value="1">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['1'].'</label><br>';

              echo '<input type="radio" name="p8" required value="2">';
              echo '<label class="incisos" for="p8">'.$_SESSION['opf8']['2'].'</label><br>';

          echo '</div> ';
    
        echo '<input type="submit" value="TERMINAR INTENTO" style=color:red; />';
        echo '</form> ';
        echo '<br>';
        echo '<br>';
        echo '<br>';
    ?>
    
      
</body>
</html>








