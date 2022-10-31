<?php

    session_start();
    if(!isset($_SESSION['admin'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{

        require_once 'cabecera.html';
        require_once '../model/alumno.php';

        $id=$_GET["id"];

        $alumno = Alumno::getAlumnoId($id);
    

        ?>
        <div class="form-group align-items-center">
            <form action="../controllers/modificar.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">

                <input type="hidden" name="id" value="<?php echo $alumno['id'];?>">
                
                <label for="nombre">Nombre</label><br>
                <input type=" text " id="element_1" name="nombre"  value="<?php echo $alumno['nombre_alu'];?>" required /> <br><br>
                <span id="element_1_msg" style="color:red"></span>

                <label for="apellido1">1r Apellido</label><br>
                <input type="text" id="element_2.1" name="apellido1"  value="<?php echo $alumno['primer_apellido_alu'];?>" required /> <br><br>
                <span id="element_2.1_msg" style="color:red"></span>

                <label for="apellido2">2n Apellido</label><br>
                <input type="text" id="element_2.2" name="apellido2"  value="<?php echo $alumno['segundo_apellido_alu'];?>" required /> <br><br>
                <span id="element_2.2_msg" style="color:red"></span>

                <label for="correo">Correo</label><br>
                <input type="text" id="element_3" name="correo" value="<?php echo $alumno['correo_alu'];?>" required /> <br><br>
                <span id="element_3_msg" style="color:red"></span>

                <label for="contraseña">Contraseña</label><br>
                <input type="text" id="element_4" name="contraseña"  value="<?php echo $alumno['contraseña_alu'];?>" required /> <br><br>
                <span id="element_4_msg" style="color:red"></span>

                <label for="dni">DNI</label><br>
                <input type="text" id="element_5" name="dni"  value="<?php echo $alumno['dni_alu'];?>" required /> <br><br>
                <span id="element_5_msg" style="color:red"></span>

                <label for="telefono">Telefono</label><br>
                <input type="text" id="element_6" name="telefono"  value="<?php echo $alumno['telefono_alu'];?>" required /> <br><br>
                <span id="element_6_msg" style="color:red"></span>

                <label for="img">Foto</label><br>
                <input type="file" id="element_7" name="img"  value="<?php echo $alumno['img_alu'];?>" required /> <br><br>
                <span id="element_7_msg" style="color:red"></span>

        
                <input type="submit" class="btn btn-warning" value="Modificar">
            </form>

        </div>
    <?php
    }