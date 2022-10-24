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
              <h4 class="title">Eres:
                <!-- POner php emial usuario -->
              </h4>
              <h4 class="title">Enviando a:
                <!-- POner php email alumno -->
              </h4>
            </div>
            <div class="col-sm-9 col-xs-12 text-right">
              <div class="btn_group">
                <button class="btn btn-default" title="Volver">
                  <i class="fa-solid fa-right-from-bracket">
                    <?php
                    // header('Location: ./BD_Profesores.php');
                    ?>
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
                <th>Sujeto</th>
                <th>Texto</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach php aqui -->
              <tr>
                <td>
                  <input type="text" style="color:black;"></input>
                </td>
                <td>
                  <input type="text" style="color:black;"></input>
                </td>
                <td>
                  <button class="btn btn-default" title="Volver">
                    <i class="fa-solid fa-paper-plane">
                      <?php
                      // header('Location: ./BD_Profesores.php');
                      ?>
                    </i>

                </td>
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