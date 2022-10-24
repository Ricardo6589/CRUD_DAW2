<?php

session_start();
            
    if(!isset($_SESSION['admin'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{ 

    require_once '../model/alumno.php';


    // require_once 'config.php';
    // require_once 'conexion.php';
    // require_once 'alumno.php';

    $id = $_GET['id'];

    Alumno::eliminarAlumno($id);

    echo"<script>window.location.href = '../view/vista.php' </script>";

}