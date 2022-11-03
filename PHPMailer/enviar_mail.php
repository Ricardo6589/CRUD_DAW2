<?php

    session_start();
    if(empty($_SESSION['correo'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{

      require_once '../view/cabecera.html';
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
        $mail->addAddress('100006439.joan23@fje.edu',);     //Add a recipient

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

      ?>
      <!-- poner los require_once aqui -->

      <body>
        <div class="container">
          <div class="col-md-offset-1 col-md-10">
            <div class="panel">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-sm-3 col-xs-12">
                    <h4 class="title">Eres:
                      <!-- POner php emial usuario -->
                    </h4>
                    <h4 class="title">Enviando a:
                      <!-- POner php email alumno -->
                    </h4>
                  </div>
                  <div class="col-sm-9 col-xs-12 text-right">
                    <div class="btn_group">
                      <form action="vista.php">
                        <button class="btn btn-default" title="Volver">
                          <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sujeto</th>
                      <th>Texto</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- foreach php aqui -->
                    <tr>
                      <td>
                        <input type="text" style="color:black;"></input>
                      </td>
                      <td>
                        <input type="text" style="color:black;"></input>
                      </td>
                      <td>
                        <button class="btn btn-default" title="Volver">
                          <i class="fa-solid fa-paper-plane">
                            <?php
                            // header('Location: ./BD_Profesores.php');
                            ?>
                          </i>

                      </td>
                    </tr>
                    <!-- hasta aqui -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>

        <?php
}