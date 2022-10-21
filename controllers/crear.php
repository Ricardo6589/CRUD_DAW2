<?php

require_once '../model/alumno.php';


// require_once 'config.php';
// require_once 'conexion.php';
// require_once 'alumno.php';


$nombre = $_POST['name'];
$edad = $_POST['edad'];

Alumno::crearAlumno($nombre_alu,$apellidos_alu,$correo_alu,$constraseña_alu, $dni_alu, $telefono_alu);
// $alu=new Alumno(null,$nombre,$edad);
// echo "$alu->nombre";

// // $stmt=$pdo->prepare("INSERT INTO tbl_alumno (nombre,edad) VALUES (?,?)");
// //Cada bind param equivale a un interrogante, siempre en orden. 
// // $stmt->bindParam(1, $alu->nombre);
// // $stmt->bindParam(2, $alu->edad);

// // $stmt=$pdo->prepare("INSERT INTO tbl_alumno (nombre,edad) VALUES (:nombre,:edad)");
// // $stmt->bindParam(':nombre', $alu->nombre);
// // $stmt->bindParam(':edad', $alu->edad);

// $stmt=$pdo->prepare("INSERT INTO tbl_alumno (id,nombre,edad) VALUES (:id,:nombre,:edad)");
//  $stmt->execute((array)$alu);
// //var_dump((array)$alu);

echo "<script>
location.href='./indexcontroller.php';
</script>";