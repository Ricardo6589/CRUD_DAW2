<?php
 
require_once '../model/conexion.php';
require_once './validate.php';

    
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$passwordHash = sha1($contraseña);      
 
$correo = $connection -> real_escape_string($correo);
    
$sql = "SELECT * FROM tbl_profesores WHERE correo_profe = '$correo' and contraseña_profe = '$passwordHash'";

$stmt=mysqli_stmt_init($connection);
   
if(!mysqli_stmt_prepare($stmt,$sql)){
       header('Location:../index.php?error=errorconexion');
    exit();

}
if(registroCamposVacios($correo,$contraseña)!==FALSE){
    header('Location:../index.php?error=camposvacios');  
    exit();
}
if(errorEmail($correo)!==FALSE){
    header('Location:../index.php?error=erroremail');
    exit();
}

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