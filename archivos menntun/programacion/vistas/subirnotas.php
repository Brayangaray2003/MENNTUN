<?php
include("../conexion/conectar.php");
session_start();
$user = $_SESSION['primer_nombre_doc'];
$ape = $_SESSION['primer_apellido_doc'];
// Conexión
$conet = new Conexion();
$con = $conet->conectando();

if (!isset($_SESSION['id_documento_doc'])) {
    header("location: ../../formularios/inicio_sesion/login_doc.php");
} else {
    $doc_docente = $_SESSION['id_documento_doc'];
    $queryasignatura = "SELECT * FROM docente WHERE id_documento_doc = '$doc_docente'";
    $resultadoasignatura = mysqli_query($con, $queryasignatura);
    $arregloasignatura = mysqli_fetch_assoc($resultadoasignatura);
    $asignatura = $arregloasignatura['cod_asignatura'];
}
//Los registros
$query2 = "SELECT actividad.cod_actividad, actividad.cod_nota, actividad.actividad, asignatura.asignatura, alumno.id_documento, alumno.primer_nombre, alumno.primer_apellido, docente.id_documento_doc, nota.nota, periodo.periodo, cursos.curso
FROM actividad
INNER JOIN nota on nota.cod_nota = actividad.cod_nota
INNER JOIN asignatura on asignatura.cod_asignatura = actividad.cod_asignatura
INNER JOIN alumno ON actividad.id_documento = alumno.id_documento
INNER JOIN docente ON actividad.cod_asignatura = docente.cod_asignatura AND actividad.id_documento_doc = docente.id_documento_doc
INNER JOIN cursos ON alumno.cod_cursos = cursos.cod_cursos
INNER JOIN periodo ON periodo.cod_periodo = actividad.cod_periodo
WHERE actividad.cod_asignatura = $asignatura AND docente.id_documento_doc = $doc_docente";

$resultado2 = mysqli_query($con, $query2);
$arreglo2 = mysqli_fetch_assoc($resultado2);
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../config/styles/estilosubnotas.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../config/images/letra-m.png">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <title>Notas</title>
</head>

<body>
    <div style="margin-left: 20px;margin-right: 20px;margin-bottom: 20px;">
        <div style="text-align: center;">
            <img src="../config/images/logomenntunb.png" class="img-fluid">
        </div>
        <h1 style="text-align: center; color:white; font-weight: bold;">Subir notas - Docente</h1>
        <div class="dt-buttons">
            <!--botón de agregar-->
            <div class="col-2 me-2 py-2" style="padding-left: 2px;padding-right: 9px;">
                <a class="btn btn-dark" style="padding-right: 9px;padding-left: 10px;border-left-width: 1px;" href="../vistas/formularios/funcion_agregar/agregarnotadoc.php" role="button">
                    <i style="color:white;" class="bi bi-plus-circle-dotted"></i>
                </a>
                <!--botón de listar-->
                <a href="../vistas/subirnotas.php" class="btn btn-dark btn" style="padding-left: 11px;padding-right: 10px;" type="submit" name="listar"><i class="fas fa-spinner"></i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" style="background-color: #fff;" class="table table-hover mx-auto" style="width:94%; margin-left:3%; box-shadow: inset 0 0 0px 2px black;">
                <thead style="color:black; background-color: #0E8388;" class=" text-black">
                    <tr>
                        <th class="text-nowrap text-light">Actividad</th>
                        <th class="text-nowrap text-light">Asignatura</th>
                        <th class="text-nowrap text-light">Primer nombre</th>
                        <th class="text-nowrap text-light">Primer apellido</th>
                        <th class="text-nowrap text-light">Notas</th>
                        <th class="text-nowrap text-light">Periodo</th>
                        <th class="text-nowrap text-light">Editar</th>
                    </tr>
                </thead>
                <tbody class="table-light text-black">
                    <?php
                    if ($arreglo2 == 0) {
                        echo "no hay registros";
                    } else {
                        do {
                    ?>
                            <tr>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['actividad'] ?></td>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['asignatura'] ?></td>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['primer_nombre'] ?></td>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['primer_apellido'] ?></td>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['nota'] ?></td>
                                <td style="text-align: center; background-color: #fff"><?php echo $arreglo2['periodo'] ?></td>

                                <!--botón de modificar-->
                                <td style="text-align: center;background-color: #fff">
                                    <div class="mx-auto" style="max-width: 42px;">
                                        <a class="btn btn-link" href="../vistas/formularios/funcion_modificar/editarnotas.php?
                                            cod_actividad=<?php echo $arreglo2['cod_actividad'] ?> &
                                            actividad=<?php echo $arreglo2['actividad'] ?> &
                                            nota=<?php echo $arreglo2['nota'] ?> &
                                            periodo=<?php echo $arreglo2['periodo'] ?>" class="btn btn" style="color: #2e4f4f; border: none; font-size: 15px"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        } while ($arreglo2 = mysqli_fetch_assoc($resultado2));
                    }
                    ?>
                </tbody>
            </table>
            <a href="./MuroD.php" type="button" class="botonreg">Regresar</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <!-- Butons -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- DataTable Initialize -->
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                    },
                    dom: 'Blfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            text: '<i class="fas fa-file-pdf"></i>',
                            titleAtrr: 'Exportar Pdf',
                            className: 'btn btn-dark',
                            orientation: 'landscape',
                            pageSize: 'LEGAL'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fas fa-file-excel"></i>',
                            titleAtrr: 'Exportar excel',
                            className: 'btn btn-dark'
                        }

                    ]
                });
            });
        </script>
</body>

</html>