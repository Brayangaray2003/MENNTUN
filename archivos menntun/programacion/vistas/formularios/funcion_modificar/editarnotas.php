<?php
include("../../../conexion/conectar.php");
// Conexión
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * from actividad";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$querynotita = "SELECT * from nota";
$resultadonotita = mysqli_query($con, $querynotita);
$arreglonotita = mysqli_fetch_assoc($resultadonotita);

//indico que me traiga todos los registros de la tabla para que los muestre en el select
$queryperiodo = "SELECT * from periodo";
$resultadoperiodo = mysqli_query($con, $queryperiodo);
$arregloperiodo = mysqli_fetch_assoc($resultadoperiodo);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../config/styles/estiloforms.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="../../../config/images/letra-m.png">
    <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
  <script src="../../../config/js/validarloginadmin.js"></script>

    <title>Modificar Notas</title>
</head>

<body className="snippet-body">
    <?php
    $cod_actividad = $_GET['cod_actividad'];
    $actividad = $_GET['actividad'];
    $nota = $_GET['nota'];
    $periodo = $_GET['periodo'];

    /* Este es para que no genere error si no se cambia la nota y me deje el que llama de la base de datos por prestablecido*/
    $nota1 = "SELECT * from nota";
    $resultadonota = mysqli_query($con, $nota1);
    $arreglonota = mysqli_fetch_assoc($resultadonota);

    /* Este es para que no genere error si no se cambia el periodo y me deje el que llama de la base de datos por prestablecido*/
    $peri = "SELECT * from periodo";
    $resultadoperi = mysqli_query($con, $peri);
    $arregloperi = mysqli_fetch_assoc($resultadoperi);
    ?>
    <div class="container card-0 justify-content-center" style=" max-height:10rem !important;">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col">
                    <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Modificar Nota</h2>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
                        Por favor, complete este formulario para modificar una nota.</p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <form action="../../../controlador/fun_modi/editarnotas2.php" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="cod_actividad" id="" value="<?= $cod_actividad ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="actividad" class="form-label">Actividad</label>
                                            <input type="text" name="actividad" id="" value="<?= $actividad ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_nota" class="form-label">Nota</label>
                                            <select class="form-control" name="cod_nota">
                                                <option selected value="<?php echo $arreglonotita['cod_nota'] ?>"><?php echo $nota ?></option>
                                                <?php foreach ($resultadonotita as $opciones) { ?>
                                                    <option value="<?php echo $opciones['cod_nota'] ?>"><?php echo $opciones['nota'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_periodo" class="form-label">Periodo</label>
                                            <select class="form-control" name="cod_periodo">
                                                <option selected value="<?php echo $arregloperiodo['cod_periodo'] ?>"><?php echo $periodo ?></option>
                                                <?php foreach ($resultadoperiodo as $opciones) { ?>
                                                    <option value="<?php echo $opciones['cod_periodo'] ?>"><?php echo $opciones['periodo'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="row d-flex justify-content-center mb-0">
                                            <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 120px;">
                                                <button type="submit" value="Agregar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_edit_notas(this.form)" >Modificar</button>
                                        </div>
                                        <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 127px;">
                                            <a type="button" class="btn btn-dark  align-items-middle" href="../../subirnotas.php">Regresar</a>
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
    </form>
</body>
<script src="../../../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>