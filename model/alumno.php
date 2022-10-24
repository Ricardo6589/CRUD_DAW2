<?php

class Alumno {
    //ATRIBUTOS
    private $id; 
    private $nombre_alu;
    private $primer_apellido_alu;
    private $segundo_apellido_alu;
    private $correo_alu;
    private $contraseña_alu;
    private $dni_alu;
    private $telefono_alu;
   

    public function __construct($id, $nombre_alu, $primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $contraseña_alu, $dni_alu, $telefono_alu) {
        $this->id = $id; //1º id referencia a atr, 2º a contructor
        $this->nombre_alu = $nombre_alu;
        $this->primer_apellido_alu = $primer_apellido_alu;
        $this->segundo_apellido_alu = $segundo_apellido_alu;       
        $this->correo_alu = $correo_alu;
        $this->contraseña_alu = $contraseña_alu;
        $this->dni_alu = $dni_alu;
        $this->telefono_alu = $telefono_alu;
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of primer_apellido_alu
     */ 
    public function getPrimer_apellido_alu()
    {
        return $this->primer_apellido_alu;
    }

    /**
     * Set the value of primer_apellido_alu
     *
     * @return  self
     */ 
    public function setPrimer_apellido_alu($primer_apellido_alu)
    {
        $this->primer_apellido_alu = $primer_apellido_alu;

        return $this;
    }

    /**
     * Get the value of segundo_apellido_alu
     */ 
    public function getSegundo_apellido_alu()
    {
        return $this->segundo_apellido_alu;
    }

    /**
     * Set the value of segundo_apellido_alu
     *
     * @return  self
     */ 
    public function setSegundo_apellido_alu($segundo_apellido_alu)
    {
        $this->segundo_apellido_alu = $segundo_apellido_alu;

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
     * Get the value of contraseña_alu
     */ 
    public function getcontraseña_alu()
    {
        return $this->contraseña_alu;
    }

    /**
     * Set the value of contraseña_alu
     *
     * @return  self
     */ 
    public function setcontraseña_alu($contraseña_alu)
    {
        $this->contraseña_alu = $contraseña_alu;

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
        $sql = ("SELECT `id`, `nombre_alu`, `primer_apellido_alu`, `segundo_apellido_alu`,`correo_alu` , `contraseña_alu`, `dni_alu`, `telefono_alu`  FROM `tbl_alumnos` WHERE id = ?");
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"i",$id);  
        mysqli_stmt_execute($stmt);         
       
    }
    
    /**
    * Esta funcion te inserta un nuevo alumno en la base de datos
    */

    public static function crearAlumno($id,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $contraseña_alu, $dni_alu, $telefono_alu){
        require_once "conexion.php";
           
        $sql="INSERT INTO tbl_alumnos (id,nombre_alu,primer_apellido_alu,segundo_apellido_alu,correo_alu,contraseña_alu,dni_alu,telefono_alu) VALUES (?,?,?,?,?,?,?,?)";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"issssss",$id,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu,$correo_alu,$contraseña_alu,$dni_alu,$telefono_alu);         
        mysqli_stmt_execute($stmt);  
    
    }   

    /**
    * Esta funcion te elimina un nuevo alumno de la base de datos
    */

    public static function eliminarAlumno($id){       
        require_once 'conexion.php';
        $sql =("DELETE FROM `tbl_alumnos` WHERE `id`=?");
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"i",$id);  
        mysqli_stmt_execute($stmt);                           
        
    }

    /**
    * Esta funcion te modifica un nuevo alumno de la base de datos
    */

    public static function updateAlumno($id,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu, $correo_alu, $contraseña_alu, $dni_alu, $telefono_alu){       
        require_once 'conexion.php';
        $sql=("UPDATE tbl_alumnos SET nombre_alu=?,primer_apellido_alu=?,segundo_apellido_alu=?,correo_alu=?,contraseña_alu=?,dni_alu=?,telefono_alu=?,primer_apellido_alu=? WHERE id=?");
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"isssssss",$id,$nombre_alu,$primer_apellido_alu,$segundo_apellido_alu,$correo_alu,$contraseña_alu,$dni_alu,$telefono_alu);  
        mysqli_stmt_execute($stmt);  
        
    }
    

    
}
