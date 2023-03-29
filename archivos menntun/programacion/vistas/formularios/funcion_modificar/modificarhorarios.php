<?php
include("../../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM horario";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$querycurso = "SELECT * from cursos";
$resultadocurso = mysqli_query($con, $querycurso);
$arreglocurso = mysqli_fetch_assoc($resultadocurso);

$querydocente = "SELECT * from docente";
$resultadocente = mysqli_query($con, $querydocente);
$arreglodocente = mysqli_fetch_assoc($resultadocente);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modificar horario</title>
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
    $cod_horario = $_GET['cod_horario'];
    $id_documento_doc = $_GET['id_documento_doc'];
    $fecha = date('Y-m-d', strtotime($_GET['fecha']));
    $horario_inicial = date('H:i:s', strtotime($_GET['horario_inicial']));
    $horario_final = date('H:i:s', strtotime($_GET['horario_final']));
    $cod_cursos = $_GET['cod_cursos'];
    $aula = $_GET['aula'];

    /* Este es para que no genere error si no se cambia el curso y me deje el que llama de la base de datos por prestablecido*/
    $cursi = "SELECT * from cursos";
    $resultadocursi = mysqli_query($con, $cursi);
    $arreglocursi = mysqli_fetch_assoc($resultadocursi);

    $docentico = "SELECT * from docente";
    $resultadocentico = mysqli_query($con, $docentico);
    $arreglodocentico = mysqli_fetch_assoc($resultadocentico);
    ?>
    <div class="container card-0 justify-content-center" style=" max-height:10rem !important;">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col">
                    <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Modificar Horario</h2>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
                        Por favor, complete este formulario para modificar el horario del docente.</p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <form action="../../../controlador/fun_modi/modificarhorario.php" method="post">
                                        <div class="form-group">
                                            <label for="horario_inicial" class="form-label">Horario inicial</label>
                                            <input type="time" name="horario_inicial" class="form-control" id="horario_inicial" value="<?php echo $horario_inicial ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="horario_final" class="form-label">Horario final</label>
                                            <input type="time" name="horario_final" class="form-control" id="horario_final" value="<?php echo $horario_final ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="date" name="fecha" class="form-control" id="fecha" value="<?php echo $fecha ?>">
                                        </div>

                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="aula" class="form-label">Aula</label>
                                        <input type="text" name="aula" class="form-control" id="aula" value="<?php echo $aula ?>">
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
                                    <div class="form-group">
                                        <label for="id_documento_doc" class="form-label">Id Docente</label>
                                        <select class="form-control" name="id_documento_doc">
                                            <!--indico el ciclo que me llena el select-->
                                            <option selected value="<?php echo $arreglodocentico['id_documento_doc'] ?>"><?php echo $id_documento_doc ?></option>
                                            <?php foreach ($resultadocente as $opciones) { ?>
                                                <option value="<?php echo $opciones['id_documento_doc'] ?>"><?php echo $opciones['id_documento_doc'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                                    <input type="hidden" class="form-control" name="cod_horario" id="cod_horario" inputmode="numeric" value="<?= $cod_horario ?>">
                                                </div>
                            <div class="row d-flex justify-content-center mb-0">
                                <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 120px;">
                                    <button type="submit" value="Modificar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_modif_horario(this.form)">Modificar</button>
                                </div>
                                <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 127px;">
                                    <a type="button" class="btn btn-dark  align-items-middle" href="../../horarios.php">Regresar</a>
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