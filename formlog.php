<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include("header.html");
    ?>
    <br><br><br>
    <div class="form">
       <fieldset form>
          <legend>Inicio de sesión</legend>
           <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
                <small id="emailHelp" class="form-text text-muted">La información proporcionada es solo tuya.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contra">
            </div>
            <div class="form-group">
                <a href="formreg.php"><label class="form-check-label" for="exampleCheck1">¿Aún no tienes cuenta?</label></a>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
       </fieldset>
    </div>
    <?php
        include("Footer.html");
    ?>
</body>

</html>
