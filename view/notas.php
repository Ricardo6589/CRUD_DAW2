
<?php

  
session_start();            
if(empty($_SESSION['correo'])){ 
  echo"<script>window.location.href = '../index.html' </script>";
}else{
  
  require_once "cabecera.html";

  ?>

  <!-- poner los require_once aqui -->

  <body>
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="panel">

          <?php
          require_once '../model/nota.php';  
          $id_alumno=$_GET["id"];    
          $nota=Nota::getNotaId($id_alumno);        
          
          ?>

          <div class="panel-heading">
            <div class="row">
              <div class="col col-sm-3 col-xs-12">
                <h4 class="title">Notas: <!--<?php echo"{$tbl_alumnos['nombre_alu']}" ?>--></h4>
              </div>
              <div class="col-sm-9 col-xs-12 text-right">
                <div class="btn_group">
                  <form action="crearnotavista.php?id={$id_alumno}">  
                      <button class="btn btn-default" title="Crear Nota">
                        <i class="fa-solid fa-circle-plus">                 
                        </i>
                      </button> 
                    </form>                
                  <form action="vista.php">
                    <button class="btn btn-default" title="Volver">
                      <i id={$id_alumno} class="fa-solid fa-right-from-bracket"></i>
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
                  <th>Modulo</th>
                  <th>UF</th>
                  <th>Actividad</th>
                  <th>Nota</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <!-- foreach php aqui -->
                <?php     
                echo "<tr>";               
                  echo "<td>{$nota['nombre_modulo']}</td>";            
                  echo "<td>{$nota['nombre_uf']}</td>";
                  echo "<td>{$nota['nombre_nota']}</td>";
                  echo "<td>{$nota['nota']}</td>"; 
                  ?>
                  <td>
                    <ul class="action-list">                      
                        <li>
                          <?php
                            echo "<a href='../view/modificarnotavista.php?id={$id_alumno}' data-tip='Editar'><i class='fa fa-edit'></i></a>"
                          ?>
                        </li>
                        <li>
                          <?php
                          echo "<a  href='../controllers/eliminar.php?id={$id_alumno}' data-tip='Eliminar'><i class='fa fa-trash'></i></a>"
                          ?>
                        </li>                    
                                         
                    </ul>
                  <td>
                  <?php
                                            
                echo "</tr>";
                ?> 
                <!-- hasta aqui -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

    <?php
}