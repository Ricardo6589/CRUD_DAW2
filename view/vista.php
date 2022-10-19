
<?php  

    session_start();
        
    if(empty($_SESSION['correo'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{
             
        require_once '../model/alumno.php';

        $listaAlumnos=Alumno::getAlumnos();


        echo "<td><a type='button' class='btn btn-success' href='../controllers/crearcontroller.php'>Crear</a></td>";
        echo "<table class='table table-light' border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>dni</th>
            <th>telefono</th>
        </tr>";

        foreach ($listaAlumnos as $alumno){
            echo "<tr>";            
            echo "<td>{$alumno['nombre']}</td>";
            echo "<td>{$alumno['apellidos_alu']}</td>";
            echo "<td>{$alumno['correo_alu']}</td>";
            echo "<td>{$alumno['dni_alu']}</td>";
            echo "<td>{$alumno['telefono_alu']}</td>";            
            echo "<td><a type='button' class='btn btn-primary' href='../controllers/actualizar.php?id={$alumno['id']}'>Actualizar</a></td>";
            echo "<td><a type='button' class='btn btn-danger' href='../controllers/eliminar.php?id={$alumno['id']}'>Eliminar</a></td>";
            echo "<td><a type='button' class='btn btn-danger' href='../controllers/crear.php?id={$alumno['id']}'>Crear</a></td>";
            echo "</tr>";
        }

    }
    
