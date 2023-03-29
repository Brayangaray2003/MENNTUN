<?php
session_start();
if (!isset($_SESSION['primer_nombre_admin'])) {
    header("location: ../vistas/formularios/inicio_sesion/login_admin.php");
}
$user = $_SESSION['primer_nombre_admin'];
$ape = $_SESSION['primer_apellido_admin'];

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


//Con Rol
$queryrol = "SELECT * from rol";
$resultadorol = mysqli_query($con, $queryrol);
$arreglorol = mysqli_fetch_assoc($resultadorol);
?>

<!-- if(isset($_POST["btningresar"])){
  $usuario=$_POST["usuario"];
  $contraseña_alum=$_POST["password"];
} -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registro Alumno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../config/styles/estiloforms.css">
  <link rel="shortcut icon" href="../../../config/images/letra-m.png" type="image/x-icon">
  <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
  <script src="../../../config/js/validarloginadmin.js"></script>

  <script defer src="../../../config/js/script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body className="snippet-body">
<?php
  /* Este es para que no genere error si no se cambia el curso y me deje el que llama de la base de datos por prestablecido*/
  $cursi = "SELECT * from cursos";
  $resultadocursi = mysqli_query($con, $cursi);
  $arreglocursi = mysqli_fetch_assoc($resultadocursi);


  //lo mismo pero con documento
  $docu = "SELECT * from tipo_documento";
  $resultadocu2 = mysqli_query($con, $docu);
  $arreglodocu2 = mysqli_fetch_assoc($resultadocu2);


  //lo mismo pero con rol
  $rol = "SELECT * from rol";
  $resultadorol2 = mysqli_query($con, $rol);
  $arreglodorol2 = mysqli_fetch_assoc($resultadorol2);
  ?>
  <div class="container card-0 justify-content-center">
    <div class="card-body px-sm-4 px-0">
      <div class="row justify-content-center mb-5">
        <div class="col-md-10 col">
          <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Registro Alumno</h2>
          <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
            Por favor, complete este formulario para registrar a un Alumno.</p>
        </div>
      </div>
      <div class="row justify-content-center round">
        <div class="col-lg-10 col-md-12">
          <div class="card shadow-lg card-1">
            <div class="card-body inner-card"style="margin-top: 15px;margin-bottom: 15px;" >
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                <form action="../../../controlador/fun_registrer/controlador_regis_alumno.php" method="post">
                    <div class="form-group">
                      <label for="primer_nombre" class="form-label">Primer nombre</label>
                      <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                    </div>
                    <div class="form-group">
                      <label for="primer_apellido" class="form-label">Primer apellido</label>
                      <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                    </div>
                    <div class="form-group">
                      <label for="cod_t_d_" class="form-label">Tipo de documento</label>
                      <select class="form-control" name="cod_t_d_">
                        <!--indico el ciclo que me llena el select-->
                        <option selected></option>
                        <?php foreach ($resultadocu as $opciones) { ?>
                          <option value="<?php echo $opciones['cod_t_d_'] ?>"><?php echo $opciones['tipo_documento'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cod_cursos" class="form-label">Curso</label>
                      <select class="form-control" name="cod_cursos">
                        <!--indico el ciclo que me llena el select-->
                        <option selected></option>
                  <?php foreach ($resultadocurso as $opciones) { ?>
                    <option value="<?php echo $opciones['cod_cursos'] ?>"><?php echo $opciones['curso'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="emai" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="number" class="form-label">Teléfono-Celular</label>
                      <input type="number" class="form-control" name="telefono" id="telefono">
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="segundo_nombre" class="form-label">Segundo nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                  </div>
                  <div class="form-group">
                    <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido_" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                  </div>
                  <div class="form-group">
                    <label for="id_documento" class="form-label">Número documento</label>
                    <input type="number" class="form-control" name="id_documento" id="id_documento"  pattern="[1-9]{1}[0-9]{9}">
                  </div>
                  <div class="form-group">
                    <label for="cod_rol" class="form-label">Rol</label>
                    <select class="form-control" name="cod_rol">
                      <option value="300">Alumno</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" maxlength="10" class="form-control" name="password" id="password">
                    <div class="input-group-addon"><i class="fa fa-eye"></i></div>
                  </div>
                  <di>
                    <div class="form-group">
                      <input type="checkbox" class="form-check-input" id="togglePassword">
                      <label for="togglePassword" class="form-check-label" style="margin-left: 10px; margin-top: 5px;">Mostrar contraseña</label>
                    </div>
                    <div class="row d-flex justify-content-end mb-0">
                      <div class="col-lg-4 col-auto" style="margin-top: 30px;">
                        <button type="submit" value="Agregar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_regi_alum(this.form)">Agregar</button>
                      </div>
                        <div class="col-lg-4 col-auto" style="margin-top: 30px;">
                        <a type="button" class="btn btn-dark  align-items-middle" href="../../alumno.php">Regresar</a>
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
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
</body>

<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>