<?php 

// -----------------------------------------------------------------------
// |      MODULOS CON SU NOTA MEDIA , EL MEJOR ALUMNO CON SU NOTA        |
// -----------------------------------------------------------------------

function nombremateria(){ 
    require ("../model/conexion.php");
    $sql1="SELECT tbl_notas.nombre_modulo as modulo from tbl_notas group by nombre_modulo";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql1);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row2=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
foreach($row2 as $value){
    echo $value[0];
}
}

function promedio(){
    require ("../model/conexion.php");
    $sql2="SELECT avg(tbl_notas.nota) as media FROM tbl_notas group by nombre_modulo ";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql2);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row3=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
foreach($row3 as $value1){
    echo $value1[0];
}
}


function alumno(){
    require ("../model/conexion.php");
    $modulos=['M10','M7','M8'];
for($i = 0; $i < count($modulos); $i++){
    $sql3="SELECT tbl_alumnos.nombre_alu FROM tbl_notas inner join tbl_alumnos on tbl_notas.id_alumnos=tbl_alumnos.id WHERE tbl_notas.nombre_modulo = '".$modulos[$i]."' GROUP BY tbl_alumnos.nombre_alu LIMIT 1";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql3);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row4=mysqli_fetch_all($resultadoconsulta);

    mysqli_stmt_close($stmt);
foreach($row4 as $value2){
    echo $value2[0];
}
}
}

function notaalumno(){
    require ("../model/conexion.php");
    $sql4="SELECT max(tbl_notas.nota) as notas FROM tbl_notas group by nombre_modulo";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql4);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row5=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
foreach($row5 as $value3){
    echo $value3[0];
}
}

// -----------------------------------------------------------------
// |               MEJOR MODULO Y SU NOTA MEDIA                    |
// -----------------------------------------------------------------

function mejormodulo(){ 
    require ("../model/conexion.php");
    //$sql= $gbd->("SELECT tbl_notas.nombre_modulo as modulo from tbl_notas");
    $sql3="SELECT tbl_notas.nombre_modulo FROM tbl_notas inner join tbl_alumnos on tbl_notas.id_alumnos=tbl_alumnos.id GROUP BY tbl_alumnos.nombre_alu order by avg(tbl_notas.nota) desc limit 1";
    //$sql="SELECT tbl_notas.nombre_modulo as modulo from tbl_notas";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql3);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row7=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
foreach($row7 as $value7){
    echo $value7[0];
}
}

function mejornotamedia(){ 
    require ("../model/conexion.php");
    //$sql= $gbd->("SELECT tbl_notas.nombre_modulo as modulo from tbl_notas");
    $sql11="SELECT avg(tbl_notas.nota) as media FROM tbl_notas group by nombre_modulo limit 1 ";
    //$sql="SELECT tbl_notas.nombre_modulo as modulo from tbl_notas";
    $stmt=mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt,$sql11);
    mysqli_stmt_execute($stmt);
    $resultadoconsulta=mysqli_stmt_get_result($stmt);
    $row7=mysqli_fetch_all($resultadoconsulta);
    mysqli_stmt_close($stmt);
foreach($row7 as $value7){
    echo $value7[0];
}
}

?>