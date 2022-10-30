<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include("header.php");
        $valida = $_GET['valida'];
    ?>

    <br><br><br>
    <div class="form">
        <table>
            <th></th>
            <th class="tabform">
                <?php
            if ($valida === "false") {
                echo'<div class="alert alert-success" role="alert">
                     Registro exitoso, ya puedes iniciar sesión.
                    </div>
                    <img src="img/okay.png" alt=""> <br>
                    <a href="formlog.php"><button type="submit" class="btn btn-primary">Iniciar Sesión</button></a>';
            }else{
                echo'<fieldset>
                    <legend>Resgistrate</legend>
                    <form action="registro.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nombre(s)</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Apellido(s)</label>
                                <input type="text" class="form-control" name="apellido">
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
                    </form>
                </fieldset> ';
            }
        ?>   
            </th>
        </table>
    </div>
    <?php
        include("../HTML/Footer.html");
    ?>
</body>

</html>