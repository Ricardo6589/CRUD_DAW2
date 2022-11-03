<?php
  session_start();
            
  if(empty($_SESSION['correo'])){ 
    echo"<script>window.location.href = '../index.html' </script>";
  }else{ 
    require_once "cabecera.html";     

    
    $connection = mysqli_connect("localhost","root", "","bd_sintesi");
    
    // if (!isset($_GET['page'])) {
    //   $page = 1;
    // } else {
    //   $page = $_GET['page'];
    // }
    // if (isset($_GET['chnglimit'])) {
    //   $chnglimit = $_GET['chnglimit'];
    //   $limit = $chnglimit;
    // } else {
    //   $limit = 5;
    // }

    // $start = ($page - 1) * $limit;
    // $previous = $page - 1;
    // $next = $page + 1;
    //$sql = "SELECT COUNT(*) FROM tbl_alumnos";
    //$result = mysqli_query($connection,$sql);
    //$pages = mysqli_fetch_assoc($result);

    //$pages = $connection->query("SELECT count(*) FROM tbl_alumnos;");
    //$pages = $count->fetch_all(MYSQLI_ASSOC);
    //$page = isset($_GET['page']) ? $_GET['page'] : 1;
    //$alumnos = my sqli_fetch_assoc($result);
    $result = mysqli_query($connection, "SELECT * FROM tbl_alumnos;");
    $result1 = mysqli_query($connection, "SELECT * FROM tbl_alumnos LIMIT $start,$limit;");
    $alumnos = $result1->fetch_all(MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $count1 = mysqli_num_rows($result1);
    $pages = ceil($count / $limit);  
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
                  <?php
                  if (isset($_SESSION['admin'])){
                  ?>
                    <form action="crearvista.php">  
                      <button class="btn btn-default" title="Crear Alumno">
                        <i class="fa-solid fa-circle-plus">                 
                        </i>
                      </button> 
                    </form>
                  <?php
                  }
                  
                  if (isset($_SESSION['admin'])){
                  ?>
                    <form action="../csv/descargar.php">
                      <button class="btn btn-default" title="Descarga CSV">
                        <i class="fa-solid fa-file-csv"></i>
                      </button>
                    </form>  
                  <?php
                  }               
                  ?>
                  <form action="estadisticas_nota.php">
                     <button class="btn btn-default" title="Estadítica Notas">
                      <i class="fa-solid fa-tenge-sign">                        
                      </i>
                    </button>
                  </form>  
                  <form action="estadisticas_nota.php">
                     <button class="btn btn-default" title="Enviar Mail">
                      <i class="fa-regular fa-envelope">                        
                      </i>
                    </button>
                  </form>  
                  <form action="../index.html">
                    <button class="btn btn-default" title="Salir">
                      <i class="fa-solid fa-right-from-bracket">                        
                      </i>
                    </button>
                  </form> 
                  <form id="form_filtros" action="vista.php" method="get">
                    <input type="text" class="form-control" name="dni_filtro" placeholder="DNI">
                    <input type="text" class="form-control" name="nombre_filtro" placeholder="Nombre">                    
                    <button class="btn btn-default" name="filtrar" title="Filtrar">
                      <i class="fa-solid fa-magnifying-glass">
                        <!-- php aqui -->
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
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>1r_Apellido</th>
                    <th>2n_Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $listaAlumnos;

                require_once '../model/alumno.php';            
                

                if(isset($_GET['filtrar'])){
                    $dni_filtro=$_GET['dni_filtro']; 
                    $nombre_filtro=$_GET['nombre_filtro'];
                    $listaAlumnos=Alumno::getAlumnos('dni_alu',$dni_filtro,'nombre_alu',$nombre_filtro);
                }
                else{ 
                    $listaAlumnos=Alumno::getAlumnos('dni_alu',"",'nombre_alu',"");
                }
                foreach ($listaAlumnos as $tbl_alumnos){
                  echo "<tr>";                    
                  echo "<td>{$tbl_alumnos['dni_alu']}</td>";            
                  echo "<td>{$tbl_alumnos['nombre_alu']}</td>";
                  echo "<td>{$tbl_alumnos['primer_apellido_alu']}</td>";
                  echo "<td>{$tbl_alumnos['segundo_apellido_alu']}</td>";
                  echo "<td>{$tbl_alumnos['correo_alu']}</td>";                
                  echo "<td>{$tbl_alumnos['telefono_alu']}</td>"; 
                  ?>
                  <td>
                    <ul class="action-list">
                      <li>
                        <?php
                          echo "<a href='../view/perfil.php?id={$tbl_alumnos['id']}' data-tip='Perfil'><i class='fa-regular fa-address-card'></i></a>";
                        ?>
                      </li>                     
                      <li>
                        <?php
                          echo "<a  href='notas.php?id={$tbl_alumnos['id']}' data-tip='Notas'><i class='fa-solid fa-file-csv' class='fa-regular fa-envelope' ></i></a>";
                        ?>
                      </li>
                      <?php
                      if (isset($_SESSION['admin'])){
                        ?>
                        <li>
                          <?php
                            echo "<a href='../view/modificarvista.php?id={$tbl_alumnos['id']}' data-tip='Editar'><i class='fa fa-edit'></i></a>"
                          ?>
                        </li>
                        <li>
                          <?php
                          echo "<a  href='../controllers/eliminar.php?id={$tbl_alumnos['id']}' data-tip='Eliminar'><i class='fa fa-trash'></i></a>"
                          ?>
                        </li>
                        <?php
                      }
                      ?>                     
                    </ul>
                  <td>
                  <?php
                  echo "</tr>";                                         
                   
                }
                  ?>                 
                </tbody>
              </table>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col col-sm-6 col-xs-6">
                Mostrando <b>
                  <!-- php aqui  -->
                  <?php echo $count1; ?>
                </b> de <b>
                  <!-- php aqui  -->
                  <?php echo $count; ?>
                </b>
                <?php
                echo "$chnglimit";
                ?>
                <form action="vista.php" method="get">
                  <input type="text" class="form-control" id="buscar" name="chnglimit" placeholder="Datos por página..." maxlength="4" size="4">
                <button class="btn btn-default" title="Mostrar" value="Mostrar">
                  <i class="fa-solid fa-file">
                  </i>
                </button>
                </form>
                <!-- <form action="BD_profesores.php" method="get">
                  <input type="text" class="form-control" id="buscar" name="chnglimit" placeholder="Datos por página...">
                  <input type="submit" class="btn btn-success" value="Mostrar">
                </form> -->
              </div>
              <div class="col-sm-6 col-xs-6">
                <ul class="pagination hidden-xs pull-right">
                  <!-- <li><a id="johncena" href="BD_Profesores.php?page=<?= $previous; ?>">
                      <i class="fa-solid fa-arrow-left"></i></a>
                  </li> -->
                  <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li class="active"><a href="vista.php?chnglimit=<?= $limit; ?>&page=<?= $i; ?>"><?= $i; ?></a></li>
                  <?php endfor; ?>
                  <!-- <li><a href="BD_Profesores.php?page=<?= $next; ?>"><i class="fa-solid fa-arrow-right"></i></a></li> -->
                </ul>
                <!-- <ul class="pagination visible-xs pull-right">
                  <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                  <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                </ul> -->

              </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
      <?php
    }