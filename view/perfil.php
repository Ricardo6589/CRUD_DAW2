
<?php

  
  session_start();            
  if(empty($_SESSION['correo'])){ 
    echo"<script>window.location.href = '../index.html' </script>";
  }else{
    
  require_once "cabecera.html";

  ?>
  <body>
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="panel">
          <div class="panel-heading">
            <div class="row">
              <div class="col col-sm-3 col-xs-12">
                <h4 class="title">
                  <!-- PHP nombre del alumno -->
                </h4>
              </div>
              <div class="col-sm-9 col-xs-12 text-right">
                <div class="btn_group">
                  <form action="vista.php">
                    <button class="btn btn-default" title="Volver">
                      <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                  </form>                  
                </div>
              </div>
            </div>
          </div>
          <?php    
          require_once '../model/alumno.php';

          $id=$_GET["id"];
    
          $alumno=Alumno::getAlumnoId($id);
          ?>
          <div class="panel-body table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Dni</th>
                  <th>Nombre</th>
                  <th>1r_Apellido</th>
                  <th>2n_Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>                  
                </tr>
              </thead>
              <tbody>
                <?php

                $ruta= "../img_usuarios/";                
            
                echo "<tr>";

                  echo "<td><img class='img_perfil' src=$ruta"."{$alumno['img_alu']}></td>";                
                  echo "<td>{$alumno['dni_alu']}</td>";            
                  echo "<td>{$alumno['nombre_alu']}</td>";
                  echo "<td>{$alumno['primer_apellido_alu']}</td>";
                  echo "<td>{$alumno['segundo_apellido_alu']}</td>";
                  echo "<td>{$alumno['correo_alu']}</td>";                
                  echo "<td>{$alumno['telefono_alu']}</td>";              
                echo "</tr>";
                ?>              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  <?php
}