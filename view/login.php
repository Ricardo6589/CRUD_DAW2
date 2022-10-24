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
</head>

<!-- poner los require_once aqui -->

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
                <button class="btn btn-default" title="Notas">
                  <i class="fa-solid fa-file-lines"></i>
                  <!-- php aqui -->
                  </i>
                  <button class="btn btn-default" title="Notas medias por materia">
                    <i class="fa-solid fa-tenge-sign"></i>
                    <!-- php aqui -->
                    </i>
                  </button>
                  <button class="btn btn-default" title="Materia con la nota más alta">
                    <i class="fa-solid fa-tenge-sign"></i>
                    <!-- php aqui -->
                    </i>
                  </button>
                  <button class="btn btn-default" title="Salir">
                    <i class="fa-solid fa-right-from-bracket">
                      <!-- php aqui -->
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
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Dni</th>
                <th>Telefono</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach php aqui -->
              <tr>
                <td>ID</td>
                <td>Alumno Ejemplo</td>
                <td>EjemploMates</td>
                <td>Ejemplo1</td>
                <td>12</td>
                <td>ejemplo@ejemplo.com</td>
                <td>
                  <ul class="action-list">
                    <li>
                      <a href="#" data-tip="Enviar Mail"><i class="fa-regular fa-envelope"></i></a>
                    </li>
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