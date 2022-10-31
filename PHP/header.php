<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>CERTIFICUAATE</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-black fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">  INICIO  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                         CERTIFICACION
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="PHP/Certificacion.php">HTML</a>
                        <a class="dropdown-item" href="PHP/Certificacion.php">C++</a>
                        <a class="dropdown-item" href="PHP/Certificacion.php">JAVA</a>
                        <a class="dropdown-item" href="PHP/Certificacion.php">CSS</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="PHP/contacto.php">   CONTACTANOS    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="PHP/AcercaDe.php">   SOBRE DE   </a>
                </li>
            </ul>
        </div>
        <div class="logo">
            <img src="img/LogoINV.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <h5>CERTIFICUAATE</h5>
        </div>
        <div>
        <?php
            echo'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
                if (empty($_SESSION["usuario"])) {
                    echo '<a class="nav-link" href="PHP/formlog.php" style="color: white">    INICIAR SESIÓN    </a>';
                }else{
                    $today = getdate();
                    $hora=$today["hours"];
                    if ($hora<6 ) {
                    echo(" Es muy temprano ".$_SESSION["usuario"]);
                    }elseif($hora<12 && $hora<17){
                    echo(" Buenos días ".$_SESSION["usuario"]);
                    }elseif($hora<=17 && $hora<20){
                    echo("Buenas Tardes ".$_SESSION["usuario"]);
                    }elseif($hora<=20 && $hora<24){ echo("Buenas Noches ".$_SESSION["usuario"]); }
                
                }echo'</button>';
                if (!empty($_SESSION["usuario"])) {
                    echo'
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                    <a class="nav-link" href="PHP/cerrar.php">  Cerrar sesión  <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>';
                }
                
            ?>
            
        </div>
        
    </nav>
</body>
</html>