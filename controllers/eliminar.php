<?php

require_once '../model/alumno.php';


// require_once 'config.php';
// require_once 'conexion.php';
// require_once 'alumno.php';

$id = $_GET['id'];

Alumno::eliminarAlumno($id);

echo"<script>window.location.href = '../view/vista.php' </script>";

