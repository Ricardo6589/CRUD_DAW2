<?php


session_start();

if (empty($_SESSION['correo'])) {
    echo "<script>window.location.href = '../index.html' </script>";
} else {

    require_once 'cabecera.html';

?>
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Crear Nota</h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="btn_group">
                                <div class="form-group align-items-center">

                                    <form action="./vista.php">
                                        <button class="btn btn-default" title="Salir">
                                            <i class="fa-solid fa-right-from-bracket">
                                            </i>
                                        </button>
                                    </form>
                                    <form action="../controllers/crearnota.php" method="POST" enctype="multipart/form-data" onchange="return validaFormulario();">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Modulo</th>
                                <th>Unidad Formativa</th>
                                <th>Actividad</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:black">

                                    <input type=" text " id="element_8" name="nombre_modulo" placeholder="Modulo" required />
                                    <span id="element_8_msg" style="color:red"></span>
                                </td>
                                <td style="color:black">

                                    <input type="text" id="element_9" name="nombre_uf" placeholder="UF" required />
                                    <span id="element_9_msg" style="color:red"></span>
                                </td>
                                <td style="color:black">

                                    <input type="text" id="element_10" name="nombre_nota" placeholder="Actividad" required />
                                    <span id="element_10_msg" style="color:red"></span>
                                </td>
                                <td style="color:black">

                                    <input type="text" id="element_11" name="nota" placeholder="Nota" required />
                                    <span id="element_11_msg" style="color:red"></span>
                                </td>
                            </tr>
                        <?php
                        echo "</tr>";
                    }
                        ?>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-warning" value="Crear">
                </form>
                </div>
            </div>
        </div>
    </div>