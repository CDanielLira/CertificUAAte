<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXAMEN JAVA</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
</head>

<body>
  
  <?php
            error_reporting(0); 
            $preguntas = array(
                1 => "¿A que se le llama “Función de c++”?፣",
                2 => "Estructura de la función:",
                3 => "¿Para que sirve el #include?",
                4 => "Función de librearía “iostream”:",
                5 => "Selección el dato “Char”:",
                6 => "Direccion de “Class” y “Struct”:",
                7 => "Función de cout:",
                8 => "Función de cin:",
                9 => "¿Cuál de estos es una condicional?",
                10 => "¿Qué condición permite tener “n” caminos diferentes?",
                11 => "Tipo de datos para decimales:",
                12 => "Tipo de datos para Verdad/Falso:",
                13 => "¿Cual es la función prototipo de una función?",
                14 => "¿Qué contiene la función prototipo?",
                15 => "Es la propiedad que permite a una operaciontener diferente comportamineto en diferentes objetos",
                16 => "Es la capacidad de definir una nueva clase a prtir de otra.De esta fomra, la reautilizacion de codigo esta garabtizado",
            );
    
    
      $respuestasCorrect =array(
        1 => "Sección especifica que realiza una tarea",
        2 => "TiposDatos /Nombres/(Parámetros)",
        3 => "Iniciar librerías",
        4 => "Flujos de entrada/salida",
        5 => "‘a’",
        6 => "En class, los miembros son privados, en struct son públicos",
        7 => "Muestra en pantalla texto.(Flujo saliendo)",
        8 => "IF",
        9 => "FOR",
        10 => "WITCH",
        11 => "FLOAT",
        12 => "BOOL",
        13 => "Declaración inicial de una función",
        14 => "Tipos de retorno, nombre y parámetros.",
        15 => "Polimorfismo",
        16 => "Herencia",
    );
    
        //LLenar el array sin repetir nombres
        $valoresRandom = array();
        $final1 = array();
        $valorRandomPrimero = mt_rand(1,16);

        array_push($valoresRandom, $valorRandomPrimero);
        array_push($final1, $preguntas[$valorRandomPrimero]);

        $x = 1;

        while ($x <= 8) {
            $siguienteValorRadom = mt_rand(1,16);
            if(in_array($siguienteValorRadom, $valoresRandom)){
                continue;
            }else{
                array_push($valoresRandom, $siguienteValorRadom);
                array_push($final1, $preguntas[$siguienteValorRadom]);
                $x++;
            }
        }
    
     function buscaCorrecta($op){
           $rcta =array(
            1 => "Sección especifica que realiza una tarea",
            2 => "TiposDatos /Nombres/(Parámetros)",
            3 => "Iniciar librerías",
            4 => "Flujos de entrada/salida",
            5 => "‘a’",
            6 => "En class, los miembros son privados, en struct son públicos",
            7 => "Muestra en pantalla texto.(Flujo saliendo)",
            8 => "IF",
            9 => "FOR",
            10 => "WITCH",
            11 => "FLOAT",
            12 => "BOOL",
            13 => "Declaración inicial de una función",
            14 => "Tipos de retorno, nombre y parámetros.",
            15 => "Polimorfismo",
            16 => "Herencia",
        );
         
        return $rcta[$op];
     }
    
    
     function buscaOpciones($opcion){
         
            $p = array(
                1 => "¿A que se le llama “Función de c++”?፣",
                2 => "Estructura de la función:",
                3 => "¿Para que sirve el #include?",
                4 => "Función de librearía “iostream”:",
                5 => "Selección el dato “Char”:",
                6 => "Direccion de “Class” y “Struct”:",
                7 => "Función de cout:",
                8 => "Función de cin:",
                9 => "¿Cuál de estos es una condicional?",
                10 => "¿Qué condición permite tener “n” caminos diferentes?",
                11 => "Tipo de datos para decimales:",
                12 => "Tipo de datos para Verdad/Falso:",
                13 => "¿Cual es la función prototipo de una función?",
                14 => "¿Qué contiene la función prototipo?",
                15 => "Es la propiedad que permite a una operaciontener diferente comportamineto en diferentes objetos",
                16 => "Es la capacidad de definir una nueva clase a prtir de otra.De esta fomra, la reautilizacion de codigo esta garabtizado",
            );
            
            for ($i=1; $i<=16; $i++){
                if ($p[$i] == $opcion){
                    return $i;
                    break;
                }
            }
     }
    

    function buscaIncisos($i){
        
        $uno = array(
            0 => "Sección especifica que realiza una tarea",
            1 => "Seccion que realiza una funcion",
            2 => "Seccion que realiza una tarea",
        );

        $dos = array(
            0 => "TiposDatos /(Parametros) /Numeros",
            1 => "TiposDatos /Nombres/(Parámetros)",
            2 => "TiposFunciones /(Parametros) /Numeros",
        );

        $tres = array(
            0 => "Terminar librerias",
            1 => "Iniciar el codigo",
            2 => "Iniciar librerías",
        );

        $cuatro = array(
            0 => "Funcion de salida",
            1 => "Flujos de entrada/salida",
            2 => "Flujo de entrada",
        );

        $cinco = array(
            0 => "10",
            1 => "‘a’",
            2 => "10.1",
        );

        $seis = array(
            0 => "En class, los miembros son privados, en struct son públicos",
            1 => "En clas, los miembros son publicos, en struct son privados",
            2 => "Amdos estan mal",
        );

        $siete = array(
            0 => "Muestra en pantalla texto.(Flujo saliendo)",
            1 => "No muestra nada.",
            2 => "Muestra en pantalla texto.(Flujo Entrada)",
        );


        $ocho = array(
            0 => "CHAR",
            1 => "FOR",
            2 => "IF",
        );

        $nueve = array(
            0 => "INT",
            1 => "IF",
            2 => "FOR",
        );

        $diez = array(
            0 => "IF",
            1 => "FOR",
            2 => "SWITCH",
        );

        $once = array(
            0 => "CHAR",
            1 => "FLOAT",
            2 => "INT",
        );

        $doce = array(
            0 => "FOOR",
            1 => "IF",
            2 => "BOOL",
        );

        $trece = array(
            0 => "Declaracion final de una funcion",
            1 => "Declaracion de una funcion",
            2 => "Declaración inicial de una función",
        );

        $catorce = array(
            0 => "Tipos char, int, float.",
            1 => "Tipos de retorno, nombre y parámetros.",
            2 => "Ninguna de las dos",
        );
        $quince = array(
            0 => "Polimorfismo",
            1 => "Herencia",
            2 => "Abstraccion",
        );
        $diezyseis = array(
            0 => "Herencia",
            1 => "Polimosrfismo",
            2 => "Abstraccion",
        );
        
        switch ($i) {
            case "1":
                return $uno;
                break;
            case "2":
                return $dos;
                break;
            case "3":
                return $tres;
                break;
            case "4":
                return $cuatro;
                break;
            case "5":
                return $cinco;
                break;
            case "6":
                return $seis;
                break;
            case "7":
                return $siete;
                break;
            case "8":
                return $ocho;
                break;
            case "9":
                return $nueve;
                break;
            case "10":
                return $diez;
                break;
            case "11":
                return $once;
                break;
            case "12":
                return $doce;
                break;
            case "13":
                return $trece;
                break;
            case "14":
                return $catorce;
                break;
            case "15":
                return $quince;
                break;
            case "16":
                return $diezyseis;
                break;
        }

    }
            
    require "vista.examen.php";
    
  ?>
  
  

   
    
</body>
</html>