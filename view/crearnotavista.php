<?php


    session_start();
            
    if(empty($_SESSION['correo'])){ 
        echo"<script>window.location.href = '../index.html' </script>";
    }else{
    
        require_once 'cabecera.html'; 
        
        $id_alumno = $_POST['id_alumno'];
        

        ?>
        <div class="form-group align-items-center">
        <form action="../controllers/crearnota.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">

            <input type="hidden" name="id" value="<?php echo $id_alumno;?>">

            <input type=" text " id="element_8" name="nombre_modulo" placeholder="Modulo" required />
            <span id="element_8_msg" style="color:red"></span>

            <input type="text" id="element_9" name="nombre_uf" placeholder="UF" required />
            <span id="element_9_msg" style="color:red"></span>

            <input type="text" id="element_10" name="nombre_nota" placeholder="Actividad" required />
            <span id="element_10_msg" style="color:red"></span>

            <input type="text" id="element_11" name="nota" placeholder="Nota" required />
            <span id="element_11_msg" style="color:red"></span>
    
            <input type="submit" class="btn btn-warning" value="Crear">
        </form>

        </div>

        <?php

    }
    