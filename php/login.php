<?php
 
    require_once 'conexion.php';


    
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $passwordHash = sha1($contraseña);      
 
    $correo = $connection -> real_escape_string($correo);
    
    $sql = "SELECT * FROM tbl_profesores WHERE correo = '$correo' and contraseña = '$passwordHash'";

    $resultados = mysqli_query($connection,$sql);
    $num=mysqli_num_rows($resultados);
   

    if ($num==1){          
        session_start();        
        $_SESSION['correo'] = $correo;
        echo"<script>window.location.href = 'vista.php' </script>";
    }else{               
        session_start();             
        echo"<script>window.location.href = '../index.html' </script>";
    }
 
?>