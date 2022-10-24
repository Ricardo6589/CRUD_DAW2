<?php

require_once '../model/alumno.php';



$nombre_alu = $_POST['nombre'];
$primer_apellido_alu = $_POST['apellido1'];
$segundo_apellido_alu = $_POST['apellido2'];
$correo_alu = $_POST['correo'];
$contraseña_alu = $_POST['contraseña'];
$passwordHash = sha1($contraseña);  
$dni_alu = $_POST['dni'];
$telefono_alu = $_POST['telefono'];

Alumno::crearAlumno(null,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $passwordHash, $dni_alu, $telefono_alu);

echo"<script>window.location.href = '../view/vista.php' </script>";
