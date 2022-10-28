<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login SÃ­tesis</title>
  <link rel="stylesheet" href="./../css/tabla.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

  <script src="https://kit.fontawesome.com/ec31a4ddf0.js" crossorigin="anonymous"></script>
  <!-- <script type=" text/javascript " src="./js/valida.js "></script> -->
</head>

<!-- poner los require_once aqui -->

<body>
  <div class="container">
    <div class="col-md-offset-1 col-md-10">
      <div class="panel">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-sm-3 col-xs-12">
              <h4 class="title">Notas Alumnos</h4>
            </div>
            <div class="col-sm-9 col-xs-12 text-right">
              <div class="btn_group">

                <button class="btn btn-default" title="Nota media">
                  <i class="fa-solid fa-circle-plus">
                    <!-- php aqui -->
                  </i>
                </button>
                <button class="btn btn-default" title="Los 3 mejores">
                  <i class="fa-solid fa-users-between-lines">
                    <!-- php aqui -->
                  </i>
                  <button class="btn btn-default" title="Materias con nota media">
                    <i class="fa-solid fa-right-from-bracket">
                      <!-- php aqui -->
                    </i>
                  </button>
                  <p></p>
                  <input type="text" class="form-control" placeholder="Alumno" />
                  <input type="text" class="form-control" placeholder="Materia" />
                  <input type="text" class="form-control" placeholder="UF" />
                  <input type="text" class="form-control" placeholder="Notas" />
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
                <th>#</th>
                <th>Alumno</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Materia</th>
                <th>UF</th>
                <th>Notas</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach php aqui -->
              <!--  -->
              <tr>
                <td>ID</td>
                <td>Victor</td>
                <td>Malaret</td>
                <td>Garciolo</td>
                <td>Base de Datos</td>
                <td>2</td>
                <td>8</td>
                <td>
                  <ul class="action-list">
                    <li>
                      <a href="#" data-tip="Editar"><i class="fa fa-edit"></i></a>
                    </li>
                    <li>
                      <a href="#" data-tip="Eliminar"><i class="fa fa-trash"></i></a>
                    </li>
                  </ul>
                </td>
              </tr>
              <!-- hasta aqui -->
            </tbody>
          </table>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col col-sm-6 col-xs-6">
              Mostrando <b>
                <!-- php aqui  -->
                10
              </b> de <b>
                <!-- php aqui  -->
                ?
              </b>
            </div>
            <div class="col-sm-6 col-xs-6">
              <ul class="pagination hidden-xs pull-right">
                <li><a href="#">
                    <i class="fa-solid fa-arrow-left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
              </ul>
              <ul class="pagination visible-xs pull-right">
                <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


<?php
$alumno=$_POST['alumno'];

$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];
$nota4=$_POST['nota4'];
$nota5=$_POST['nota5'];
$nota6=$_POST['nota6'];

$promedioalumno = ($nota1+$nota2+$nota3+$nota4+$nota5+$nota6)/3;
$promedioalumnos = 
echo "El promedio de".$alumno."es:".$promedio.'<br/>';
echo "El promedio de los alumnos es:".$promedio.'<br/>';