<?php

    require_once 'cabezera.html';
    require_once '../model/alumno.php';

    $id=$_GET["id"];

    $alumno = Alumno::getAlumnoId($id);
   

    ?>
    <div class="form-group align-items-center">
        <form action="../controllers/modificar.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">

            <input type=" text " id="element_1" name="nombre" placeholder="Nombre" value="<?php echo $alumno['nombre_alu'];?>" required />
            <span id="element_1_msg" style="color:red"></span>

            <input type="text" id="element_2" name="apellido1" placeholder="Primer Apellido" value="<?php echo $alumno['primer_apellido_alu'];?>" required />
            <span id="element_2.1_msg" style="color:red"></span>

            <input type="text" id="element_2" name="apellido2" placeholder="Segundo Apellido" value="<?php echo $alumno['segundo_apelldio_alu'];?>" required />
            <span id="element_2.2_msg" style="color:red"></span>

            <input type="text" id="element_2" name="correo" placeholder="Correo" value="<?php echo $alumno['correo_alu'];?>" required />
            <span id="element_3_msg" style="color:red"></span>

            <input type="password" id="element_2" name="contraseña" placeholder="Contraseña" value="<?php echo $alumno['contraseña_alu'];?>" required />
            <span id="element_4_msg" style="color:red"></span>

            <input type="text" id="element_2" name="dni" placeholder="DNI" value="<?php echo $alumno['dni_alu'];?>" required />
            <span id="element_5_msg" style="color:red"></span>

            <input type="text" id="element_2" name="telefono" placeholder="Telefono" value="<?php echo $alumno['telefono_alu'];?>" required />
            <span id="element_6_msg" style="color:red"></span>

    
            <input type="submit" class="btn btn-warning" value="Modificar">
        </form>

    </div>