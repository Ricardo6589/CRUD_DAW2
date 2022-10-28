<?php
require_once 'tabla.php';
$nombre = $_POST['nombre_alu'];
$correo = $_POST['correo_alu'];

require_once 'correo.html';
$mensaje= $_POST['mensaje'];

$correo = $connection -> real_escape_string($correo);

    if($correo = $nombrealu){
        echo("Has enviado un correo a:"$nombrealu);
        $envio .= "Return-path: "$correo"\r\n"; ;
    }else{
        echo("Ha habido algún error");
    }
?>