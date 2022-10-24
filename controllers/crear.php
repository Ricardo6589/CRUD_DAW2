<?php

    
    session_start();
            
    if(!isset($_SESSION['admin'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{    

        require_once '../model/alumno.php';
        $nombre_alu = $_POST['nombre'];
        $primer_apellido_alu = $_POST['apellido1'];
        $segundo_apellido_alu = $_POST['apellido2'];
        $correo_alu = $_POST['correo'];
        $contraseña_alu = $_POST['contraseña'];
        $contraseña_alu = sha1($contraseña_alu);  
        $dni_alu = $_POST['dni'];
        $telefono_alu = $_POST['telefono'];

        Alumno::crearAlumno(null,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $contraseña_alu, $dni_alu, $telefono_alu);

        echo"<script>window.location.href = '../view/vista.php' </script>";

    }