<?php
include("../../../conexion/conectar.php");
// Conexión
$conet = new Conexion();
$con = $conet->conectando();

session_start();
$user = $_SESSION['primer_nombre_doc'];
$ape = $_SESSION['primer_apellido_doc'];

if (!isset($_SESSION['id_documento_doc'])) {
    header("location: ../../formularios/inicio_sesion/login_doc.php");
} else {
    $doc_docente = $_SESSION['id_documento_doc'];
    $queryasignatura = "SELECT * FROM docente WHERE id_documento_doc = '$doc_docente'";
    $resultadoasignatura = mysqli_query($con, $queryasignatura);
    $arregloasignatura = mysqli_fetch_assoc($resultadoasignatura);
    $asignatura = $arregloasignatura['cod_asignatura'];
}

$id_docente = $_SESSION['id_documento_doc'];
$queryasig = "SELECT asignatura.asignatura FROM docente INNER JOIN asignatura on asignatura.cod_asignatura = docente.cod_asignatura WHERE id_documento_doc = $id_docente";
$resultadoasig = mysqli_query($con, $queryasig);
$row = mysqli_fetch_assoc($resultadoasig);
$asignatura2 = $row['asignatura'];

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$queryperiodo = "SELECT * from periodo";
$resultadoperiodo = mysqli_query($con, $queryperiodo);
$arregloperiodo = mysqli_fetch_assoc($resultadoperiodo);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$queryalumno = "SELECT * from alumno";
$resultadoalumno = mysqli_query($con, $queryalumno);
$arregloalumno = mysqli_fetch_assoc($resultadoalumno);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$querynota = "SELECT * from nota";
$resultadonota = mysqli_query($con, $querynota);
$arreglonota = mysqli_fetch_assoc($resultadonota);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agregar Nota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../config/styles/estiloforms.css">
    <link rel="shortcut icon" href="../../../config/images/letra-m.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
    <script src="../../../config/js/validarloginadmin.js"></script>
   

    <script defer src="../../../config/js/script.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
    /* Este es para que no genere error si no se cambia el periodo y me deje el que llama de la base de datos por prestablecido*/
    $peri = "SELECT * from periodo";
    $resultadoperi = mysqli_query($con, $peri);
    $arregloperi = mysqli_fetch_assoc($resultadoperi);

    //lo mismo pero con alumno
    $alum = "SELECT * from alumno";
    $resultadoalum = mysqli_query($con, $alum);
    $arregloalum = mysqli_fetch_assoc($resultadoalum);

    //lo mismo pero con nota
    $nota = "SELECT * from nota";
    $resultadonota = mysqli_query($con, $nota);
    $arreglonota = mysqli_fetch_assoc($resultadonota);

    ?>
    <div class="container card-0 justify-content-center" style=" max-height:10rem !important;">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col">
                    <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Agregar Nota</h2>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
                        Por favor, complete este formulario para registrar una nueva nota.</p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <form action="../../../controlador/fun_insertar/insertarnotadoc.php" method="post">
                                        <div class="form-group">
                                            <label for="actividad" class="form-label">Actividad:</label>
                                            <input type="text" class="form-control" name="actividad" id="actividad">
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_asignatura" class="form-label">Asignatura:</label>
                                            <?php echo "<input type='text' name='asignatura' value='$asignatura2' readonly>"?>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_documento" class="form-label">Alumno:</label>
                                            <select class="form-control" name="id_documento">
                                                <!--indico el ciclo que me llena el select-->
                                                <option selected></option>
                                                <?php foreach ($resultadoalumno as $opciones) { ?>
                                                    <option value="<?php echo $opciones['id_documento'] ?>"><?php echo $opciones['primer_nombre'] ?> <?php echo $opciones['primer_apellido'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_nota" class="form-label">Nota:</label>
                                            <select class="form-control" name="cod_nota">
                                                <!--indico el ciclo que me llena el select-->
                                                <option selected></option>
                                                <?php foreach ($resultadonota as $opciones) { ?>
                                                    <option value="<?php echo $opciones['cod_nota'] ?>"><?php echo $opciones['nota'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_periodo" class="form-label">Periodo:</label>
                                            <select class="form-control" name="cod_periodo">
                                                <!--indico el ciclo que me llena el select-->
                                                <option selected></option>
                                                <?php foreach ($resultadoperiodo as $opciones) { ?>
                                                    <option value="<?php echo $opciones['cod_periodo'] ?>"><?php echo $opciones['periodo'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id_documento_doc" id="id_documento_doc" value="<?php echo $doc_docente?>">
                                        </div>
                                </div>
                                
                                <div class="row d-flex justify-content-center mb-0">
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 120px;">
                                        <button type="submit" value="Agregar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_agreg_nota(this.form)">Agregar</button>
                                    </div>
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 127px;">
                                        <a type="button" class="btn btn-dark  align-items-middle" href="../../subirnotas.php">Regresar</a>
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

</body>
<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>