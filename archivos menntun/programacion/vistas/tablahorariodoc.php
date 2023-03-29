<?php
// Archivo de conexión con BD
include("../conexion/conectar.php");
// Conexión
$conet = new Conexion();
$con = $conet->conectando();

session_start();
$user = $_SESSION['primer_nombre_doc'];
$ape = $_SESSION['primer_apellido_doc'];


if (!isset($_SESSION['id_documento_doc'])) {
    header("location: ../../formularios/inicio_sesion//login_doc.php");
} else {
$doc_docente = $_SESSION['id_documento_doc'];
$queryasignatura = "SELECT * FROM docente WHERE id_documento_doc = '$doc_docente'";
$resultadoasignatura = mysqli_query($con, $queryasignatura);
$arregloasignatura = mysqli_fetch_assoc($resultadoasignatura);
$asignatura = $arregloasignatura['cod_asignatura'];
}

//Los registros
// $query2 = "SELECT cursos.curso, horario.horario_inicial, horario.horario_final, horario.fecha, horario.aula FROM docente JOIN cursos ON docente.cod_cursos = cursos.cod_cursos JOIN horario ON docente.id_documento_doc = horario.id_documento_doc AND cursos.cod_cursos = horario.cod_cursos WHERE docente.id_documento_doc = $doc_docente AND docente.cod_asignatura = $asignatura ORDER BY horario.fecha ASC, horario.horario_inicial ASC";
$query2 = "SELECT horario.cod_horario, horario.estado, docente.id_documento_doc, docente.primer_nombre_doc, docente.segundo_nombre_doc, docente.primer_apellido_doc, docente.segundo_apellido_doc, horario.horario_inicial, horario.horario_final, horario.fecha, horario.aula, cursos.curso
FROM horario 
INNER JOIN docente ON horario.id_documento_doc = docente.id_documento_doc 
INNER JOIN cursos ON horario.cod_cursos = cursos.cod_cursos 
WHERE docente.id_documento_doc = '$doc_docente' 
ORDER BY horario.fecha ASC, horario.horario_inicial ASC";
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
    <link rel="stylesheet" href="../config/styles/tablahorariodoc.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../config/images/letra-m.png">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <title>Horario</title>
</head>

<body>
<div style="margin-left: 20px;margin-right: 20px;margin-bottom: 20px;">
        <div style="text-align: center;">
            <img src="../config/images/logomenntunb.png" class="img-fluid">
        </div>
        <h1 style="text-align: center; color:white; font-weight: bold;">Horarios - Docente</h1>
    <div style="margin-top: 55px;">
        <div>
            <div class="dt-buttons">
                    <!--botón de listar-->
                    <a href="../vistas/tablahorariodoc.php" class="btn btn-dark" style="padding-left: 11px;padding-right: 10px;" type="submit" name="listar"><i style="color:white;" class="fas fa-spinner"></i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-hover mx-auto">
                <thead style="background-color:#23272b">
                    <tr class="text-center">
                        <th class="text-nowrap text-light">Inicio horario</th>
                        <th class="text-nowrap text-light">Final horario</th>
                        <th class="text-nowrap text-light">Fecha</th>
                        <th class="text-nowrap text-light">Aula</th>
                        <th class="text-nowrap text-light">Curso</th>
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
                                <td style="text-align: center;background-color: #FFFFFF"><?php echo $arreglo2['horario_inicial'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"> <?php echo $arreglo2['horario_final'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"><?php echo $arreglo2['fecha'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"><?php echo $arreglo2['aula'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"><?php echo $arreglo2['curso'] ?></td>
                            </tr>
                    <?php
                        } while ($arreglo2 = mysqli_fetch_assoc($resultado2));
                    }
                    ?>
                </tbody>
            </table>
            <a href="./MuroD.php" type="button" class="botonreg">Regresar</a>
        </div>
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