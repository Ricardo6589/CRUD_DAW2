<?php
 
    require_once '../model/conexion.php';


    
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $passwordHash = sha1($contraseña);      
 
    $correo = $connection -> real_escape_string($correo);
    
    $sql = "SELECT * FROM tbl_profesores WHERE correo_profe = '$correo' and contraseña_profe = '$passwordHash'";

   $stmt=mysqli_stmt_init($connection);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header('Location:../registro.php?error=errorconexion');
    exit();

}
   mysqli_stmt_bind_param($stmt,"s",$correo,$passwordHash);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultadoconsulta)){
        $row=true;
    }else{
        $error=false;
    }
    mysqli_stmt_close($stmt);
    return $error;

    // $resultados = mysqli_query($connection,$sql);
    $num=mysqli_num_rows($resultadoconsulta);
   
    

    if ($num==1){          
        session_start();        
        $_SESSION['correo'] = $correo;
        echo"<script>window.location.href = '../view/vista.php' </script>";
    }else{               
        session_destroy();             
        echo"<script>window.location.href = '../index.html' </script>";
    }
 
?>