<?php

class Nota {
    //ATRIBUTOS
    private $id; 
    private $nombre_modulo;
    private $nombre_uf;
    private $nombre_nota;
    private $nota;
    private $id_alumnos;  
   

    public function __construct($id, $nombre_modulo, $nombre_uf,$nombre_nota, $nota, $id_alumnos) {
        $this->id = $id; //1º id referencia a atr, 2º a contructor
        $this->nombre_modulo = $nombre_modulo;
        $this->nombre_uf = $nombre_uf;
        $this->nombre_nota = $nombre_nota;       
        $this->nota = $nota; 
        $this->id_alumnos = $id_alumnos;       
        
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
     * Get the value of nombre_modulo
     */ 
    public function getNombre_modulo()
    {
        return $this->nombre_modulo;
    }

    /**
     * Set the value of nombre_modulo
     *
     * @return  self
     */ 
    public function setNombre_modulo($nombre_modulo)
    {
        $this->nombre_modulo = $nombre_modulo;

        return $this;
    }

    /**
     * Get the value of nombre_uf
     */ 
    public function getNombre_uf()
    {
        return $this->nombre_uf;
    }

    /**
     * Set the value of nombre_uf
     *
     * @return  self
     */ 
    public function setNombre_uf($nombre_uf)
    {
        $this->nombre_uf = $nombre_uf;

        return $this;
    }

    /**
     * Get the value of nombre_nota
     */ 
    public function getNombre_nota()
    {
        return $this->nombre_nota;
    }

    /**
     * Set the value of nombre_nota
     *
     * @return  self
     */ 
    public function setNombre_nota($nombre_nota)
    {
        $this->nombre_nota = $nombre_nota;

        return $this;
    }

    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

      /**
     * Get the value of id_alumnos
     */ 
    public function getId_alumnos()
    {
        return $this->id_alumnos;
    }

    /**
     * Set the value of id_alumnos
     *
     * @return  self
     */ 
    public function setId_alumnos($id_alumnos)
    {
        $this->id_alumnos = $id_alumnos;

        return $this;
    }


    /**
    * Esta funcion te devuelve la lista de nota y no le pasa ningun parametro
    */

    public static function getNotaId($id_alumnos){    
        
        require_once 'conexion.php';
        $sql = ("SELECT `nombre_modulo`, `nombre_uf`, `nombre_nota`,`nota`  FROM `tbl_notas` INNER JOIN tbl_alumnos ON $id_alumnos=tbl_notas.id_alumnos");        
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);        
        mysqli_stmt_execute($stmt);        
        $nota=mysqli_stmt_get_result($stmt);
        mysqli_fetch_assoc($nota);        
        foreach ($nota as $tbl_notas){  
                      
            $tbl_notas['nombre_modulo'];
            $tbl_notas['nombre_uf'];
            $tbl_notas['nombre_nota'];            
            $tbl_notas['nota'];                          
        }  
        return $tbl_notas;    

    }


    public static function crearNota($id,$nombre_modulo,$nombre_uf,$nombre_nota,$nota){        
       
        require_once "conexion.php";
           
        $sql="INSERT INTO tbl_notas ($id,$nombre_modulo,$nombre_uf,$nombre_nota,$nota) VALUES (?,?,?,?,?)";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"issss",$id,$nombre_modulo,$nombre_uf,$nombre_nota,$nota);         
        mysqli_stmt_execute($stmt);  
    
    }  
  
}