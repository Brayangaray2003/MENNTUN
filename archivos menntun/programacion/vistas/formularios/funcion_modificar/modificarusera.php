<?php
include("../../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from alumno";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$querycurso = "SELECT * from cursos";
$resultadocurso = mysqli_query($con, $querycurso);
$arreglocurso = mysqli_fetch_assoc($resultadocurso);


//Lo mismo pero con tipo de documento
$querydocu = "SELECT * from tipo_documento";
$resultadocu = mysqli_query($con, $querydocu);
$arreglodocu = mysqli_fetch_assoc($resultadocu);

$id_documento = $_GET['id_documento'];

?>

<!-- if(isset($_POST["btningresar"])){
  $usuario=$_POST["usuario"];
  $contraseña_alum=$_POST["password"];
} -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../../config/images/letra-m.png">
  <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
  <script src="../../../config/js/validarloginadmin.js"></script>


  <link rel="stylesheet" href="../../../config/styles/estiloforms.css" type="text/css">
  <title>Modificar Alumno</title>
</head>


<body>
  <?php
  $id_documento = $_GET['id_documento'];
  $cod_t_d_ = $_GET['cod_t_d_'];
  $primer_nombre = $_GET['primer_nombre'];
  $segundo_nombre = $_GET['segundo_nombre'];
  $primer_apellido = $_GET['primer_apellido'];
  $segundo_apellido = $_GET['segundo_apellido'];
  $tel_cel = $_GET['tel_cel'];
  $correo = $_GET['correo'];
  $cod_cursos = $_GET['cod_cursos'];

  /* Este es para que no genere error si no se cambia el curso y me deje el que llama de la base de datos por prestablecido*/
  $cursi = "SELECT * from cursos WHERE curso= '$cod_cursos'";
  $resultadocursi = mysqli_query($con, $cursi);
  $arreglocursi = mysqli_fetch_assoc($resultadocursi);


  //lo mismo pero con documento
  $docu = "SELECT * from tipo_documento WHERE tipo_documento= '$cod_t_d_'";
  $resultadocu2 = mysqli_query($con, $docu);
  $arreglodocu2 = mysqli_fetch_assoc($resultadocu2);
  ?>
  <div class="container card-0 justify-content-center">
    <div class="card-body px-sm-4 px-0">
      <div class="row justify-content-center mb-5">
        <div class="col-md-10 col">
          <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Modificar Alumno</h2>
          <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
            Por favor, complete este formulario para modificar a un Alumno.</p>
        </div>
      </div>
      <div class="row justify-content-center round">
        <div class="col-lg-10 col-md-12">
          <div class="card shadow-lg card-1">
            <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
            <form action="../../../controlador/fun_modi/modificara.php" method="post">  
            <div class="row justify-content-center">
                
                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="primer_nombre" class="form-label">Primer nombre</label>
                      <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" value="<?= $primer_nombre ?>">
                    </div>
                    <div class="form-group">
                      <label for="primer_apellido" class="form-label">Primer apellido</label>
                      <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" value="<?= $primer_apellido ?>">
                    </div>
                    <div class="form-group">
                      <label for="cod_t_d_" class="form-label">Tipo de documento</label>
                      <select class="form-control" name="cod_t_d_">
                        <!--indico el ciclo que me llena el select-->
                        <option selected value="<?= $arreglodocu2['cod_t_d_'] ?>"><?= $cod_t_d_ ?></option>
                        <?php foreach ($resultadocu as $opciones) { ?>
                          <option value="<?php echo $opciones['cod_t_d_'] ?>"><?php echo $opciones['tipo_documento'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cod_cursos" class="form-label">Curso</label>
                      <select class="form-control" name="cod_cursos">
                        <!--indico el ciclo que me llena el select-->
                        <option selected value="<?php echo $arreglocursi['cod_cursos'] ?>"><?php echo $cod_cursos ?></option>
                        <?php foreach ($resultadocurso as $opciones) { ?>
                          <option value="<?php echo $opciones['cod_cursos'] ?>"><?php echo $opciones['curso'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="segundo_nombre" class="form-label">Segundo nombre</label>
                      <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" value="<?= $segundo_nombre ?>">
                    </div>
                    <div class="form-group">
                      <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                      <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" value="<?= $segundo_apellido ?>">
                    </div>
                    <div class="form-group">
                      <label for="emai" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?= $correo ?>">
                    </div>
                    <div class="form-group">
                      <label for="telefono" class="form-label">Teléfono-Celular</label>
                      <input type="text" class="form-control" maxlength="10" name="telefono" id="telefono" value="<?php echo $tel_cel ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_documento" id="id_documento" inputmode="numeric" value="<?= $id_documento ?>">
                    </div>
                    <div class="row d-flex justify-content-end mb-0">
                      <div class="col-lg-4 col-auto" style="margin-top: 30px;">
                        <button type="submit" value="Modificar" class="btn btn-dark text-center me-2" style="border-color:#23272b;" name="submit" onclick="return validar_modif_alumno(this.form)" >Modificar</button>
                      </div>
                      <div class="col-lg-4 col-auto" style="margin-top: 30px;">
                        <a type="button" class="btn btn-dark  align-items-middle" href="../../alumno.php">Regresar</a>
                      </div>
                    </div>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div>
</body>
<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>