<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar contraseña Alumno </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./style1.css">
  <link rel="shortcut icon" href="./img/letra-m.png" type="image/x-icon">
  <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
  <script src="../../../config/js/validarloginadmin.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
      <div class="d-flex flex-lg-row flex-column-reverse">
        <div class="card card1">
          <div class="row justify-content-center my-auto">
            <div class="col-md-8 col-10 my-5">
              <div class="row justify-content-center px-3 mb-3">
                <img id="logo" src="../../../config/images/M-negra.png"/>
              </div>
              <h3 class="mb-5 text-center heading">Escirbir correo electronico</h3>

              <h5 class="msg-info" style="text-align: center;">Por favor, ingrese su correo</h5>

              <div class="form-group">
              <form method="post" action="correo.php">

                  <label class="form-label text-muted">Correo electrónico</label>
                  <input type="email" class="form-control" name="correo">
              </div>



              <div class="row justify-content-center my-3 px-3">
              <form method="post" action="correo.php">

                <input type="submit" class="btn form-control btn-block btn-color" name="submit"  onclick="return validar_cambiar_contralumno(this.form)">
              </div>
            </div>
          </div>
          <div class="bottom text-center mb-5">
          </div>
        </div>
        <div class="card card2">
          <div class="my-auto mx-md-5 px-md-5 right">
            <h1 class="text-white">Bienvenido Alumno</h1>
            <h6 class="text-white">Estamos contigo para hacer tu proceso académico més fácil</h6>
            <a class="btn btn-lg btn btn-link" name="regresar" href="login_alumno.php" role="button"><i class="bx bx-left-arrow-alt bx-flashing bx-md" style='color:#fff;'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>
