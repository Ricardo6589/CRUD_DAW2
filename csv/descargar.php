<?php
require_once '../model/conexion.php';
    
$sql = "SELECT * FROM tbl_alumnos";
$listaAlumnos = mysqli_query($connection, $sql);
file_put_contents("registros_alumnos.csv","DNI;Nombre;Apellidos;Correo;Telefono;\n");
foreach ($listaAlumnos as $key => $value) {

     file_put_contents("registros_alumnos.csv","{$value['dni_alu']};{$value['nombre_alu']};{$value['apellidos_alu']};{$value['correo_alu']};{$value['telefono_alu']}\n",FILE_APPEND);
}
echo"<script>window.location.href = '../view/vista.php' </script>";