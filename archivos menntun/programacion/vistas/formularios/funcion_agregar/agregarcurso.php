<?php
include("../../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from cursos";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$querycurso = "SELECT * from cursos";
$resultadocurso = mysqli_query($con, $querycurso);
$arreglocurso = mysqli_fetch_assoc($resultadocurso);

$querygrado = "SELECT * from grado";
$resultadogrado = mysqli_query($con, $querygrado);
$arreglogrado = mysqli_fetch_assoc($resultadogrado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agregar Curso</title>
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

    $grado2 = "SELECT * from grado";
    $resultadogrado2 = mysqli_query($con, $grado2);
    $arreglogrado2 = mysqli_fetch_assoc($resultadogrado2);
    ?>
    <div class="container card-0 justify-content-center" style=" max-height:10rem !important;">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col">
                    <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Agregar Curso</h2>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
                        Por favor, complete este formulario para registrar un nuevo curso.</p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <form action="../../../controlador/fun_insertar/insertarcurso.php" method="post">
                                        <div class="form-group">
                                            <label for="curso" class="form-label">Curso</label>
                                            <input type="text" name="curso" class="form-control" id="curso">
                                        </div>
                                        <div class="form-group">
                                        <label for="cod_grado" class="form-label">Grado</label>
                                        <select class="form-control" name="cod_grado">
                                                <!--indico el ciclo que me llena el select-->
                                                <option selected></option>
                                                <?php foreach ($resultadogrado as $opciones) { ?>
                                                    <option value="<?php echo $opciones['cod_grado'] ?>"><?php echo $opciones['grado'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="row d-flex justify-content-center mb-0">
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 120px;">
                                        <button type="submit" value="Agregar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_agreg_curso(this.form)">Agregar</button>
                                    </div>
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 127px;">
                                        <a type="button" class="btn btn-dark  align-items-middle" href="../../cursos.php">Regresar</a>
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