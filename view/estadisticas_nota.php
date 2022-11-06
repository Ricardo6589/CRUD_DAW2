<!DOCTYPE html>
<?php
require_once ("funcion.php");
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login SinÂ­tesis</title>
  <link rel="stylesheet" href="../css/login.css" />
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
              <h4 class="title">Base de Datos: Notas Medias Modulos</h4>
            </div>
            <div class="col-sm-9 col-xs-12 text-right">
              <div class="btn_group">
                    <form action="./vista.php" >
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
                <th>Nombre materia</th>
                <th>Nota media</th>
                <th>Nombre alumno</th>
                <th>Nota alumno</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach php aqui -->
              <tr>
                <td><?php nombremateria(); ?></td>
                <td><?php promedio(); ?></td>
                <td><?php alumno(); ?></td>
                <td><?php notaalumno(); ?></td>
              </tr>
              <!-- hasta aqui -->
            </tbody>
          </table>
          <div class="panel-body table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Mejor Modulo</th>
                <th>Nota media</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach php aqui -->
              <tr>
                <td><?php mejormodulo(); ?></td>
                <td><?php mejornotamedia(); ?></td>
              </tr>
              <!-- hasta aqui -->
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>