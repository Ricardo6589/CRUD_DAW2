<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'configcorreo.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                        //Enable verbose debug output
    $mail->isSMTP();                                             //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
    $mail->Username   = EMAIL;                                //SMTP username
    $mail->Password   = PASS;                                //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     //Enable implicit TLS encryption
    $mail->Port       = 587;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //correo que envia y correo que recive
    $mail->setFrom('100006393.joan23@fje.edu', 'Mailer');
    $mail->addAddress('durangallego1@gmail.com',);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Correo de Administrador';
    $mail->Body    = 'Hola USUARIO este es un saludo del administrador</b>';
//'$usuario'

    $mail->send();
    echo 'Enviado correctamente';
} catch (Exception $e) {
    echo "Enviado incorrectamente: {$mail->ErrorInfo}";
}