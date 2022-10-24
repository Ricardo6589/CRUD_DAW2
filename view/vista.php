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

            $listaAlumnos=Alumno::getAlumnos();

            echo "<table class='table table-light' border='1'>
            <tr>
                <th>Perfil</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>1r Apellido</th>
                <th>2n Apellido</th>
                <th>Correo</th>                
                <th>Telefono</th>
                <th>Notas</th>";
                
                if (isset($_SESSION['admin'])){  
                    echo "<th>Modificar</th>";
                    echo "<th>Eliminar</th>";
                }"
            </tr>";

            foreach ($listaAlumnos as $tbl_alumnos){
                echo "<tr>";

                echo "<td><a type='button' class='btn btn-danger' href='../view/perfil.php?id={$tbl_alumnos['id']}'>Perfil</a></td>";
                echo "<td>{$tbl_alumnos['dni_alu']}</td>";            
                echo "<td>{$tbl_alumnos['nombre_alu']}</td>";
                echo "<td>{$tbl_alumnos['primer_apellido_alu']}</td>";
                echo "<td>{$tbl_alumnos['segundo_apellido_alu']}</td>";
                echo "<td>{$tbl_alumnos['correo_alu']}</td>";                
                echo "<td>{$tbl_alumnos['telefono_alu']}</td>";
                echo "<td><a type='button' class='btn btn-danger' href='../controllers/crearnota.php?id={$tbl_alumnos['id']}'>Notas</a></td>";
                
                if (isset($_SESSION['admin'])){                     
                    echo "<td><a type='button' class='btn btn-primary' href='../view/modificarvista.php?id={$tbl_alumnos['id']}'>Modificar</a></td>";
                    echo "<td><a type='button' class='btn btn-danger' href='../controllers/eliminar.php?id={$tbl_alumnos['id']}'>Eliminar</a></td>";                
                    echo "</tr>";
                }                         
               
            }
                        
            if (isset($_SESSION['admin'])){    
            ?>
            <a href="../view/crearvista.php" class="btn btn-success btn-lg" role="button" aria-disabled="true">Crear</a><br>
            <a href="../csv/descargar.php" class="btn btn-success btn-lg" role="button" aria-disabled="true">Descargar CSV</a>
            <?php
            }
            ?>
            <a href="../index.html" class="btn btn-success btn-lg" role="button" aria-disabled="true">Log Out</a>
            <?php

        }

    ?>
    
</body>
</html>
<?php  

    
    
