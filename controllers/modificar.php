<?php
require_once '../model/alumno.php';
require_once '../view/modificarvista.php';

$id = $_POST['id'];
$nombre = $_POST['name'];
$edad = $_POST['edad'];

// $sql = "UPDATE `tbl_alumno` SET `id`='[$id]',`nombre`='[$nombre]',`edad`='[edad]' WHERE id=?";

Alumno::updateAlumno($id,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $constraseña_alu, $dni_alu, $telefono_alu);

// header("Location:vista.php");
echo"<script>window.location.href = '../index.html' </script>";
// echo "<script>location.href=\"vista.php\"</script>";
