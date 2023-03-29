<?php
include("../../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);
?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión Docente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../../config/styles/main.css">
  <link rel="shortcut icon" href="../../../config/images/letra-m.png" type="image/x-icon">
  <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
  <script src="../../../config/js/validarloginadmin.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script defer src="../../../config/js/script.js"></script>

</head>

<body class="vh-100">
  <div class="d-flex justify-content-center">
    <div class="container px-4 py-5 mx-auto">
      <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
          <div class="card card1">
            <div class="row justify-content-center my-auto">
              <div class="col-md-8 col-10 my-5">
                <div class="row justify-content-center px-3 mb-3">
                  <img id="logo" src="../../../config/images/M-negra.png" />
                </div>
                <h3 class="mb-5 text-center heading">Inicio de Sesión</h3>

                <h5 class="msg-info" style="text-align: center;">Por favor, ingrese a su cuenta</h5>

                <div class="form-group">
                  <form action="../../../controlador/fun_login/controlador_docente.php" method="post">

                    <label for="docente" class="form-label text-muted">Correo electrónico</label>
                    <input type="email" class="form-control" name="docente" id="docente" required>
                </div>

                <div class="form-group">
                  <label for="password" class="form-control-label text-muted">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="form-check">
                  <label for="togglePassword" class="form-check-label">Mostrar contraseña</label>
                  <input type="checkbox" class="form-check-input" id="togglePassword" style="margin-right: 50px;margin-left: 50px;margin-top: 0px;">
                </div>

                <div class="row justify-content-center my-3 px-3">
                  <input type="submit" class="btn form-control btn-block btn-color" name="btningresar" value="Ingresar" onclick="return validar_login_doc(this.form)">
                </div>

                <div class="row justify-content-center my-2">
                  <a href="cambiar_contraseña_doc.php">
                    <small class="text-muted">¿Olvidó su contraseña?</small>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card card2">
            <div class="my-auto mx-md-5 px-md-5 right">
              <h1 class="text-white">Bienvenido Docente</h1>
              <h6 class="text-white">Nos agrada ser parte de sus procesos académicos.</h6>
              <a class="btn btn-lg btn btn-link" name="regresar" href="../../inicio.php" role="button"><i class="bx bx-left-arrow-alt bx-flashing bx-md" style='color:#fff;'></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>


</html>