<?php
            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
                $nombre = $_POST['nombre'];
                $email = $_POST['correo'];
                $mensaje='
                <html> 
                    <head> 
                       <title>¿Hola, Todo bien ' .$nombre .'?</title> 
                    </head> 
                    <body> 
                    <h1>Disculpa ' .$nombre .', trabajamos en ello.</h1> 
                        <p>Gracias por ponerte en contacto con nosotros </p>
                        <p>Serás atendido a la brevedad </p>
                        <p>Núm tel: 4491472589</p>
                        <br><br>
                        <p>@CertificUAAte</p>
                    </body> 
                    </html> ';
                $asunto='Contacto';
                $myMail = new PHPMailer();
                $myMail->isSMTP();
                $myMail->Host='smtp.office365.com';
                $myMail->SMTPAuth = true;
                $myMail->Port=587;
                $myMail->Username='saldan2312@outlook.com';
                $myMail->Password='Toros12!';
                $myMail->SMTPSecure='tls';
                $myMail->setFrom('saldan2312@outlook.com','CertificUAAte');
                $myMail->addAddress($email);
                $myMail->Subject = $asunto;
                $myMail->isHTML();
                $myMail->Body=$mensaje;
                if($myMail->send()){
                    echo "<div><h1>Correo enviado correctamente</h1></div>";
                }else{
                    $error = $myMail->ErrorInfo;
                    echo "<div><h4>Error, no se ha enviado el email: $error </h4></div>";
                } 
        ?>