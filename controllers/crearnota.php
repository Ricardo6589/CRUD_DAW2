<?php

    
    session_start();
            
    if(empty($_SESSION['correo'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{    

        require_once '../model/nota.php';
        $nombre_modulo = $_POST['nombre_modulo'];
        $nombre_uf = $_POST['nombre_uf'];
        $nombre_nota = $_POST['nombre_nota'];
        $nota = $_POST['nota'];
        $id_alumnos = $_POST['id'];     
       

        Nota::crearNota(null,$nombre_modulo,$nombre_uf,$nombre_nota,$nota,$id_alumnos);

        echo"<script>window.location.href = '../view/vista.php' </script>";

    }