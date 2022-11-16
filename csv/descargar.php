<?php
require_once '../model/conexion.php';
    
$sql = "SELECT * FROM tbl_alumnos";
$listaAlumnos = mysqli_query($connection, $sql);
file_put_contents("registros_alumnos.csv","DNI;Nombre;1r Apellido;2n Apellido;Correo;Telefono\n");
foreach ($listaAlumnos as $key => $value) {

     file_put_contents("registros_alumnos.csv","{$value['dni_alu']};{$value['nombre_alu']};{$value['primer_apellido_alu']};{$value['segundo_apellido_alu']};{$value['correo_alu']};{$value['telefono_alu']}\n",FILE_APPEND);
}
echo"<script>window.location.href = '../view/vista.php' </script>";