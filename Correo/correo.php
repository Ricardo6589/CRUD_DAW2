<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'configcorreo.php';
require_once '../model/conexion.php';

//formulariocorreo
$cuerpo = $_POST['cuerpo'];
$mensaje = $_POST['mensaje'];
$correo = $_POST['correo'];
$unotodosvarios = $_POST['educacion'];


$mail=new PHPMailer(true);

//convertir en array , con array haces bucle
//coger coma , php separar por ,
///

//1.despues de varios pongas un numero , y hacerlo por imputs separados
//2. como esta ahora pero con un javascript quite la coma ...
//falta validaciones javascript

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                        //Enable verbose debug output
    $mail->isSMTP();                                             //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
    $mail->Username   = EMAIL;   //tiene que ser con el que accedas real                             //SMTP username
    $mail->Password   = PASS;    //contraseña real                            //SMTP password
    //es mejor usuario fijo porque habria que poner las cuentas de correo y sus contraseñas en los alumnos 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     //Enable implicit TLS encryption
    $mail->Port       = 587;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //correo que envia y correo que recive
    //'100006393.joan23@fje.edu'
    $mail->setFrom(EMAIL , 'Mailer'); //tiene que ser con el que accedas real

    //un alumno
    if($unotodosvarios == 'uno'){
        $correobd = "SELECT tbl_alumnos.correo_alu FROM tbl_alumnos WHERE correo = ?";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$correobd);
        mysqli_stmt_bind_param($stmt,"s",$correo);
        mysqli_stmt_execute($stmt);
        $resultadoconsulta=mysqli_stmt_get_result($stmt);
        $resultado=mysqli_fetch_all($resultadoconsulta);
        mysqli_stmt_close($stmt);
        if($resultado = $correo){
            $mail->addAddress($correo);
        }
    }

    //algunos alumnos

    if($unotodosvarios == 'varios'){
    $arraycorreo = explode(',', $correo);
    foreach ($arraycorreo as $correoalumno) {
        $correobd = "SELECT tbl_alumnos.correo_alu FROM tbl_alumnos WHERE correo = ?";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$correobd);
        mysqli_stmt_bind_param($stmt,"s",$correoalumno);
        mysqli_stmt_execute($stmt);
        $resultadoconsulta=mysqli_stmt_get_result($stmt);
        $resultado=mysqli_fetch_all($resultadoconsulta);
        mysqli_stmt_close($stmt);
        if($resultado = $correoalumno){
            $mail->addAddress($correoalumno);
        }
    }
    }

    //todos los alumnos

    if($unotodosvarios == 'todos'){
    $correobd = "SELECT correo_alu FROM tbl_alumnos";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$correobd);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    var_dump($resultadoconsulta);
    $resultado=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
    foreach ($resultado as $correoalumno) {
        $mail->addAddress($correoalumno[0]);
    }
    }
    
    //$mail->addAddress('100007001.joan23@fje.edu',);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $cuerpo;
    $mail->Body = $mensaje;
    // $mail->Subject = 'Correo de Administrador';
    // $mail->Body    = 'Hola USUARIO este es un saludo del administrador</b>';
    
//'$usuario'

    $mail->send();
    echo 'Enviado correctamente';
    echo "<script>window.location.href = '../view/vista.php' </script>";
} catch (Exception $e) {
    echo "Enviado incorrectamente: {$mail->ErrorInfo}";
}
// } else{
//     alert("Has puesto mal el correo");
// }

//Create an instance; passing `true` enables exceptions
