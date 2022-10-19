<?php
 
    require_once '../model/conexion.php';


    
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $passwordHash = sha1($contraseña);      
 
    $correo = $connection -> real_escape_string($correo);
    
    $sql = "SELECT * FROM tbl_profesores WHERE correo_profe = '$correo' and contraseña_profe = '$passwordHash'";

    $resultados = mysqli_query($connection,$sql);
    $num=mysqli_num_rows($resultados);
   

    if ($num==1){          
        session_start();        
        $_SESSION['correo'] = $correo;
        echo"<script>window.location.href = '../view/vista.php' </script>";
    }else{               
        session_destroy();             
        echo"<script>window.location.href = '../index.html' </script>";
    }
 
?>