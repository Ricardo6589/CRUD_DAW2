<?php
    
    require_once 'cabezera.html';  

    ?>
    <div class="form-group align-items-center">
    <form action="../controllers/crear.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">

        <input type=" text " id="element_1" name="nombre" placeholder="Nombre" required />
        <span id="element_1_msg" style="color:red"></span>

        <input type="text" id="element_2" name="apellido1" placeholder="Primer Apellido" required />
        <span id="element_2.1_msg" style="color:red"></span>

        <input type="text" id="element_2" name="apellido2" placeholder="Segundo Apellido" required />
        <span id="element_2.2_msg" style="color:red"></span>

        <input type="text" id="element_2" name="correo" placeholder="Correo" required />
        <span id="element_3_msg" style="color:red"></span>

        <input type="password" id="element_2" name="contraseña" placeholder="Contraseña" required />
        <span id="element_4_msg" style="color:red"></span>

        <input type="text" id="element_2" name="dni" placeholder="DNI" required />
        <span id="element_5_msg" style="color:red"></span>

        <input type="text" id="element_2" name="telefono" placeholder="Telefono" required />
        <span id="element_6_msg" style="color:red"></span>

   
        <input type="submit" class="btn btn-warning" value="Crear">
    </form>

    </div>
    