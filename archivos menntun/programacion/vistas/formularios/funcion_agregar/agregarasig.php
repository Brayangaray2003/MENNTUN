<?php
include("../../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from asignatura";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agregar asignatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../config/styles/estiloforms.css">
    <link rel="shortcut icon" href="../../../config/images/letra-m.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
    <script src="../../../config/js/validarloginadmin.js"></script>

    <script defer src="../../../config/js/script.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body className="snippet-body">
    <div class="container card-0 justify-content-center" style=" max-height:10rem !important;">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col">
                    <h2 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Agregar Asignatura</h2>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-lg-left">
                        Por favor, complete este formulario para registrar una nueva asignatura.</p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card" style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <form action="../../../controlador/fun_insertar/insertarasig.php" method="post">
                                        <div class="form-group">
                                            <label for="asignatura" class="form-label">Asignatura</label>
                                            <input type="text" name="asignatura" class="form-control" id="asignatura">
                                        </div>
                                </div>
                                <div class="row d-flex justify-content-center mb-0">
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 120px;">
                                        <button type="submit" value="Agregar" class="btn btn-dark text-center" style="border-color:#23272b;" name="submit" onclick="return validar_agreg_asig(this.form)">  Agregar  </button>
                                    </div>
                                    <div class="col-lg-4 col-auto" style="margin-top: 30px;max-width: 127px;">
                                        <a type="button" class="btn btn-dark  align-items-middle" href="../../asignatura.php">Regresar</a>
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