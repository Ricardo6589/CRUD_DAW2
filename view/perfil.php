<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php 
        session_start();
            
        if(empty($_SESSION['correo'])){ 
            echo"<script>window.location.href = '../index.html' </script>";
        }else{
                


            require_once '../model/alumno.php';

            $id=$_GET["id"];

            $alumno=Alumno::getAlumnoId($id);
            
            echo "<table class='table table-light' border='1'>
            <tr>
                
                <th>DNI</th>
                <th>Nombre</th>
                <th>1r Apellido</th>
                <th>2n Apellido</th>
                <th>Correo</th>                
                <th>Telefono</th>
                
            </tr>";

            
                echo "<tr>";
                echo "<td>{$alumno['dni_alu']}</td>";            
                echo "<td>{$alumno['nombre_alu']}</td>";
                echo "<td>{$alumno['primer_apellido_alu']}</td>";
                echo "<td>{$alumno['segundo_apellido_alu']}</td>";
                echo "<td>{$alumno['correo_alu']}</td>";                
                echo "<td>{$alumno['telefono_alu']}</td>";              
                echo "</tr>";
             

        }

    ?>
    
</body>
</html>
<?php  

    