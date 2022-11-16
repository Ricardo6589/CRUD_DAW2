<?php
require_once '../view/cabecera.html';

?>
<!DOCTYPE html>
<html lang="en">
<script src="./js/validacorro.js"></script>


<div class="container">
    <div class="col-md-offset-1 col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-sm-3 col-xs-12">
                        <h4 class="title">Formulario Envio Correo</h4>
                    </div>
                    <div class="col-sm-9 col-xs-12 text-right">
                        <div class="btn_group">
                            <div class="form-group align-items-center">

                                <form action="../view/vista.php">
                                    <button class="btn btn-default" title="Salir">
                                        <i class="fa-solid fa-right-from-bracket">
                                        </i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>¿Cuántos?</th>
                                <th>Correo/s</th>
                                <th>Cuerpo</th>
                                <th>Mensaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="correo.php" method="POST">
                                    <td style="color:black">
                                        <select name="educacion">
                                            <option value="uno">Uno</option>
                                            <option value="varios">Varios</option>
                                            <option value="todos">Todos</option>
                                        </select>

                                    </td>
                                    <td style="color:black">
                                        <input type="text" name="correo" placeholder="Correo/s">
                                    </td>
                                    <td style="color:black">

                                        <input type="text" name="cuerpo" placeholder="Cuerpo">
                                    </td>
                                    <td style="color:black">
                                        <input type="text" name="mensaje" placeholder="Mensaje">

                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>

                    <input type="submit" name="submit" class="btn btn-warning" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>









    </body>