<?php

class Alumno {
    //ATRIBUTOS
    private $id; 
    private $nombre_alu;
    private $apellidos_alu;
    private $correo_alu;
    private $constraseña_alu;
    private $dni_alu;
    private $telefono_alu;
   

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
     * Get the value of nombre_alu
     */ 
    public function getNombre_alu()
    {
        return $this->nombre_alu;
    }

    /**
     * Set the value of nombre_alu
     *
     * @return  self
     */ 
    public function setNombre_alu($nombre_alu)
    {
        $this->nombre_alu = $nombre_alu;

        return $this;
    } 
    
    /**
     * Get the value of apellidos_alu
     */ 
    public function getApellidos_alu()
    {
        return $this->apellidos_alu;
    }

    /**
     * Set the value of apellidos_alu
     *
     * @return  self
     */ 
    public function setApellidos_alu($apellidos_alu)
    {
        $this->apellidos_alu = $apellidos_alu;

        return $this;
    }

    /**
     * Get the value of correo_alu
     */ 
    public function getCorreo_alu()
    {
        return $this->correo_alu;
    }

    /**
     * Set the value of correo_alu
     *
     * @return  self
     */ 
    public function setCorreo_alu($correo_alu)
    {
        $this->correo_alu = $correo_alu;

        return $this;
    }

    /**
     * Get the value of constraseña_alu
     */ 
    public function getConstraseña_alu()
    {
        return $this->constraseña_alu;
    }

    /**
     * Set the value of constraseña_alu
     *
     * @return  self
     */ 
    public function setConstraseña_alu($constraseña_alu)
    {
        $this->constraseña_alu = $constraseña_alu;

        return $this;
    }

    /**
     * Get the value of dni_alu
     */ 
    public function getDni_alu()
    {
        return $this->dni_alu;
    }

    /**
     * Set the value of dni_alu
     *
     * @return  self
     */ 
    public function setDni_alu($dni_alu)
    {
        $this->dni_alu = $dni_alu;

        return $this;
    }

    /**
     * Get the value of telefono_alu
     */ 
    public function getTelefono_alu()
    {
        return $this->telefono_alu;
    }

    /**
     * Set the value of telefono_alu
     *
     * @return  self
     */ 
    public function setTelefono_alu($telefono_alu)
    {
        $this->telefono_alu = $telefono_alu;

        return $this;
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

    public static function getAlumnoId(int $id){
    
        require_once 'conexion.php';
        $stmt = ("SELECT `id`, `nombre_alu`, `apellidos_alu`, `correo_alu` , `contraseña_alu`, `dni_alu`, `telefono_alu`  FROM `tbl_alumno` WHERE id = ?");
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_bind_param($stmt,"i",$id);  
        mysqli_stmt_execute($stmt);        
        return $stmt;
       
    }
    
    /**
    * Esta funcion te inserta un nuevo alumno en la base de datos
    */

    public static function crearAlumno($nombre_alu,$apellidos_alu, $correo_alu, $constraseña_alu, $dni_alu, $telefono_alu){
        require_once "conexion.php";
        $stmt=("INSERT INTO tbl_alumno (id,nombre_alu,apellidos_alu,correo_alu,constraseña_alu,dni_alu,telefono_alu) VALUES (?,?,?,?,?,?,?)");
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_bind_param($stmt,"s",$nombre_alu);
        mysqli_stmt_bind_param($stmt,"s",$apellidos_alu);
        mysqli_stmt_bind_param($stmt,"s",$correo_alu);
        mysqli_stmt_bind_param($stmt,"i",$constraseña_alu);
        mysqli_stmt_bind_param($stmt,"s",$dni_alu);
        mysqli_stmt_bind_param($stmt,"s",$telefono_alu);       
        mysqli_stmt_execute($stmt);
        return $stmt;
    }   

}
