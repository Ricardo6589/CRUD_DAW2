<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Sítesis</title>
  <link rel="stylesheet" href="./../css/tabla.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

  <script src="https://kit.fontawesome.com/ec31a4ddf0.js" crossorigin="anonymous"></script>
  <!-- <script type=" text/javascript " src="./js/valida.js "></script> -->
</head>

<?php
include_once "../model/conexion.php";
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
if (isset($_GET['chnglimit'])) {
  $chnglimit = $_GET['chnglimit'];
  $limit = $chnglimit;
} else {
  $limit = 5;
}

$start = ($page - 1) * $limit;
$previous = $page - 1;
$next = $page + 1;
//$sql = "SELECT COUNT(*) FROM tbl_alumnos";
//$result = mysqli_query($connection,$sql);
//$pages = mysqli_fetch_assoc($result);

//$pages = $connection->query("SELECT count(*) FROM tbl_alumnos;");
//$pages = $count->fetch_all(MYSQLI_ASSOC);
//$page = isset($_GET['page']) ? $_GET['page'] : 1;
//$alumnos = mysqli_fetch_assoc($result);
$result = mysqli_query($connection, "SELECT * FROM tbl_alumnos;");
$result1 = mysqli_query($connection, "SELECT * FROM tbl_alumnos LIMIT $start,$limit;");
$alumnos = $result1->fetch_all(MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result1);
$pages = ceil($count / $limit);



?>

<body>
  <div class="container">
    <div class="col-md-offset-1 col-md-10">
      <div class="panel">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-sm-3 col-xs-12">
              <h4 class="title">Base de Datos: Alumnos</h4>
            </div>
            <div class="col-sm-9 col-xs-12 text-right">
              <div class="btn_group">

                <button class="btn btn-default" title="Crear">
                  <i class="fa-solid fa-circle-plus">
                    <!-- php aqui -->
                  </i>
                </button>
                <button class="btn btn-default" title="Descarga CSV">
                  <i class="fa-solid fa-file-csv">
                    <!-- php aqui -->
                  </i>
                </button>
                <button class="btn btn-default" title="Notas medias por materia">
                  <i class="fa-solid fa-tenge-sign">
                    <!-- php aqui -->
                  </i>
                </button>
                <button class="btn btn-default" title="Materia con la nota más alta">
                  <i class="fa-solid fa-tenge-sign">
                    <!-- php aqui -->
                  </i>
                </button>
                <button class="btn btn-default" title="Salir">
                  <i class="fa-solid fa-right-from-bracket">
                    <?php
                    // header('Location: ./BD_Profesores.php');
                    // exit();
                    ?>
                  </i>
                </button>
                <p></p>
                <input type="text" class="form-control" placeholder="Nombre" />
                <input type="text" class="form-control" placeholder="Apellido" />
                <input type="text" class="form-control" placeholder="Correo" />
                <input type="text" class="form-control" placeholder="DNI" />
                <input type="text" class="form-control" placeholder="Telefono" />
                <button class="btn btn-default" title="Validar">
                  <i class="fa-solid fa-magnifying-glass">
                    <!-- php aqui -->
                  </i>
                </button>
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
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($alumnos as $alumno) : ?>
                <tr>
                  <td><?= $alumno['dni_alu']; ?></td>
                  <td><?= $alumno['nombre_alu']; ?></td>
                  <td><?= $alumno['primer_apellido_alu']." ".$alumno['segundo_apellido_alu']; ?></td>
                  <td><?= $alumno['correo_alu']; ?></td>
                  <td><?= $alumno['telefono_alu']; ?></td>
                  <td>
                    <ul class="action-list">
                      <li>
                        <a href="#" data-tip="Perfil"><i class="fa-regular fa-address-card"></i></a>
                      </li>

                    </ul>
                  </td>
                </tr>
              <?php endforeach; ?>
              <!-- hasta aqui -->
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
</body>

</html>