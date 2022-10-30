<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
   <?php
        include("header.html");
    ?>
    <div class="form">
        <table>
            <th>
                <img src="img/Logo.png" alt="">
            </th>
            <th><form action="registro.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre(s)</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                     <div class="form-group col-md-6">
                        <label for="inputEmail4">Motivo de contacto</label>
                        <input type="email" class="form-control" name="apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" placeholder="example@example.com" name="correo1">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Email (segundario)</label>
                    <input type="emial" class="form-control" placeholder="example2@example2.com" name="correo2">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Contraseña</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Usuario</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form></th>
        </table>
    </div>
    <?php
        include("Footer.html");
    ?>
</body>
</html>