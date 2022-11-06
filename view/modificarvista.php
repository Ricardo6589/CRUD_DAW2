<?php

session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location.href = '../index.html' </script>";
} else {

    require_once 'cabecera.html';
    require_once '../model/alumno.php';

    $id = $_GET["id"];

    $alumno = Alumno::getAlumnoId($id);


?>
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Alumnos</h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="btn_group">
                                <div class="form-group align-items-center">
                                    <form action="../controllers/modificar.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">
                                        <input type="submit" class="btn btn-warning" value="Modificar">
                                    </form>
                                    <form action="./vista.php">
                                        <button class="btn btn-default" title="Salir">
                                            <i class="fa-solid fa-right-from-bracket">
                                            </i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>1r_Apellido</th>
                                <th>2n_Apellido</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Dni</th>
                                <th>Telefono</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <div class="form-group align-items-center">
                            <form action="../controllers/modificar.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">
                                <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
                                <tbody>
                                    <tr>
                                        <td style="color:black">
                                            <input type=" text " id="element_1" name="nombre" value="<?php echo $alumno['nombre_alu']; ?>" required size="5px" /> <br><br>
                                            <span id="element_1_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">

                                            <input type="text" id="element_2.1" name="apellido1" value="<?php echo $alumno['primer_apellido_alu']; ?>" required size="10px" /> <br><br>
                                            <span id="element_2.1_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">

                                            <input type="text" id="element_2.2" name="apellido2" value="<?php echo $alumno['segundo_apellido_alu']; ?>" required size="12px" /> <br><br>
                                            <span id="element_2.2_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">

                                            <input type="text" id="element_3" name="correo" value="<?php echo $alumno['correo_alu']; ?>" required size="5px" /> <br><br>
                                            <span id="element_3_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">

                                            <input type="text" id="element_4" name="contraseña" value="<?php echo $alumno['contraseña_alu']; ?>" required size="8px" /> <br><br>
                                            <span id="element_4_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">

                                            <input type="text" id="element_5" name="dni" value="<?php echo $alumno['dni_alu']; ?>" required size="8px" /> <br><br>
                                            <span id="element_5_msg" style="color:red"></span>
                                        </td>
                                        <td style="color:black">
                                            <input type="text" id="element_6" name="telefono" value="<?php echo $alumno['telefono_alu']; ?>" required size="8px" /> <br><br>
                                            <span id="element_6_msg" style="color:red"></span>
                                        </td>
                                        <td>
                                            <input type="file" id="element_7" name="img" value="<?php echo $alumno['img_alu']; ?>" required /> <br><br>
                                            <span id="element_7_msg" style="color:red"></span>
                                        </td>

                                    </tr>
                                <?php
                                echo "</tr>";
                            }
                                ?>
                                </tbody>
                            </form>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>