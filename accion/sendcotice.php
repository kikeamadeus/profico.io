<?php
//Data from file [POST]
$producto = (empty($_POST['producto'])) ? 'S/N' : $_POST['producto'];
$cantidad = (empty($_POST['cantidad'])) ? 'S/N' : $_POST['cantidad'];
$cliente = (empty($_POST['cliente'])) ? 'S/N' : $_POST['cliente'];
$correo = (empty($_POST['correo'])) ? 'S/N' : $_POST['correo'];
$telefono = (empty($_POST['telefono'])) ? 'S/N' : $_POST['telefono'];
$mensaje = (empty($_POST['mensaje'])) ? 'S/N' : $_POST['mensaje'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                              //Enable verbose debug output
    $mail->isSMTP();                                   //Send using SMTP
    $mail->Host       = 'cloud2.hosting-mexico.net';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                          //Enable SMTP authentication
    $mail->Username   = 'ventasonline@profico.com.mx'; //SMTP username
    $mail->Password   = 'Piels@991004';                //SMTP password
    $mail->SMTPSecure = 'ssl';                         //Enable implicit TLS encryption
    $mail->Port       = 465;                           //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ventasonline@profico.com.mx', 'Solicitud de Cotizacion'); 
    $mail->addAddress('ventasonline@profico.com.mx');                         //Add a recipient
    /*$mail->addAddress('ellen@example.com');                                 //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $cliente;
    $mail->Body    = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Profico - Soluciones Urbanas</title>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Cliente</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Mensaje</th>
            </tr>
            <tr>
                <td>'.$producto.'</td>
                <td>'.$cantidad.'</td>
                <td>'.$cliente.'</td>
                <td>'.$correo.'</td>
                <td>'.$telefono.'</td>
                <td>'.$mensaje.'</td>
            </tr>
        </table>
    </body>
    </html>
    ';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Profico - Envió Satisfactorio</title>

        <!-- Favicon y Presentación -->
        <link rel="mask-icon" sizes="any" color="#ffffff" href="../assets/img/profico.svg">
        <link rel="shortcut icon" type="image/x-ico" href="../assets/img/profico.ico">
        <link rel="apple-touch-icon" href="../assets/img/profico.png" />
        <link rel="apple-touch-icon-precomposed" href="../assets/img/profico_57x57.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/profico_72x72.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/profico_114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/img/profico_152x152.png">

        <!-- Librerías de estilos -->
        <link rel="stylesheet" href="../assets/css/materialize.min.css">
        <link rel="stylesheet" href="../assets/css/profico.css">
        <link rel="stylesheet" href="../assets/css/profico.responsive.css">

        <!-- Iconos y Fuentes de Sistema -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="emailBody">
        <div id="emailContainer" class="container">
            <div id="emailCard" class="card">
                <div class="card-content center-align">
                    <img id="emailImg" class="responsive-img" src="../assets/img/sendmail.gif" alt="Correcto">
                    <h1 class="emailTitle">¡Mensaje enviado!</h1>
                    <p class="emailText">Gracias por comunicarte con nosotros en breve obtendrás una respuesta de nosotros</p>
                    <a href="../catalogo" class="btn btn-email">Regresar al catalogo</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
} catch (Exception $e) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Profico - Envió Erronaemente</title>

        <!-- Favicon y Presentación -->
        <link rel="mask-icon" sizes="any" color="#ffffff" href="../assets/img/profico.svg">
        <link rel="shortcut icon" type="image/x-ico" href="../assets/img/profico.ico">
        <link rel="apple-touch-icon" href="../assets/img/profico.png" />
        <link rel="apple-touch-icon-precomposed" href="../assets/img/profico_57x57.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/profico_72x72.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/profico_114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/img/profico_152x152.png">

        <!-- Librerías de estilos -->
        <link rel="stylesheet" href="../assets/css/materialize.min.css">
        <link rel="stylesheet" href="../assets/css/profico.css">
        <link rel="stylesheet" href="../assets/css/profico.responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <!-- Iconos y Fuentes de Sistema -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="emailBody">
        <div id="emailContainer" class="container">
            <div id="emailCard" class="card">
                <div class="card-content center-align">
                    <img id="emailImg" class="responsive-img" src="../assets/img/errormail.gif" alt="Correcto">
                    <h1 class="emailTitle">¡Lo sentimos!</h1>
                    <p class="emailText">Existe un problema al enviar tu mensaje. Aquí te dejamos los detalles del error para que te comuniques con tu webmaster:</p>
                    <p class="errorEmailText">'.$mail->ErrorInfo.'</p>
                    <a href="../." class="btn btn-email">Regresar al inicio</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
}
?>