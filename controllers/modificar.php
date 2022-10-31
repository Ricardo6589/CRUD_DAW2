<?php


session_start();
            
if(!isset($_SESSION['admin'])){ 
    echo"<script>window.location.href = '../index.html' </script>";
}else{ 
    require_once '../model/alumno.php';


    $id = $_POST['id'];
    $nombre_alu = $_POST['nombre'];
    $primer_apellido_alu = $_POST['apellido1'];
    $segundo_apellido_alu = $_POST['apellido2'];
    $correo_alu = $_POST['correo'];
    $contraseña_alu = $_POST['contraseña'];
    $contraseña_alu = sha1($contraseña_alu);  
    $dni_alu = $_POST['dni'];
    $telefono_alu = $_POST['telefono'];    
    $path=date('h-i-s-j-m-y')."-".$_FILES['img']['name'];     
    if (move_uploaded_file($_FILES['img']['tmp_name'],'../img_usuarios/'.$path)) {
        
         Alumno::updateAlumno($nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $contraseña_alu, $dni_alu, $telefono_alu,$path,$id);

    }


   

    echo"<script>window.location.href = '../view/vista.php' </script>";

}