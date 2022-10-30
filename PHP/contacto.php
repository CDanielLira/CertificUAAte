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
        <div class="imgform">
            <img src="/img/Logo.png" alt="">
        </div>
        <div class="tabform">
            <fieldset form>
                <legend>Contactanos</legend>
                <form action="email.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre(s)</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Motivo</label>
                            <select id="inputState" class="form-control">
                                <option selected>Motivo</option>
                                <option value="">Problemas de pago</option>
                                <option value="">Olvide mi contraseña</option>
                                <option value="">Fallos en páginas</option>
                                <option value="">Reenbolso</option>
                                <option value="">Ayuda personalizada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" placeholder="example@example.com" name="correo">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="inputCity">Usuario</label>
                            <input type="text" class="form-control" name="usuario">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Contactar</button>
                </form>
            </fieldset>
        </div>
        <table>
            <th>
                
            </th>
            <th class="tabform">

            </th>
        </table>
    </div>
    <?php
        include("Footer.html");
    ?>
</body>

</html>