<?php

class Alumno {
    //ATRIBUTOS
    public $id; 
    public $nombre_alu;
    public $apellidos_alu;
    public $correo_alu;
    public $constraseña_alu;
    public $dni_alu;
    public $telefono_alu;
   

    public function __construct($id, $nombre_alu, $apellidos_alu, $correo_alu, $constraseña_alu, $dni_alu, $telefono_alu) {
        $this->id = $id; //1º id referencia a atr, 2º a contructor
        $this->nombre_alu = $nombre_alu;
        $this->apellidos_alu = $apellidos_alu;
        $this->correo_alu = $correo_alu;
        $this->constraseña_alu = $constraseña_alu;
        $this->dni_alu = $dni_alu;
        $this->telefono_alu = $telefono_alu;
        
    }

    /**
    * Esta funcion te devuelve la lista de alumnos y no le pasa ningun parametro
    */
    public static function getAlumnos(){        
        require_once "conexion.php";
        $sql = "SELECT * FROM tbl_alumnos";
        $listaAlumnos = mysqli_query($connection, $sql);  
        return $listaAlumnos;
    }

}
