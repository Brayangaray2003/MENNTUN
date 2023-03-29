<?php
session_start();
if (!isset($_SESSION['primer_nombre_admin'])) {
    header("location: ../vistas/formularios/inicio_sesion/login_admin.php");
}
$user = $_SESSION['primer_nombre_admin'];
$ape = $_SESSION['primer_apellido_admin'];
// Archivo de conexión con BD
include("../conexion/conectar.php");
// Conexión
$conet = new Conexion();
$con = $conet->conectando();

//Los registros
$query2 = "SELECT * FROM grado";
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
    <link rel="stylesheet" href="../config/styles/estilotablas.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../config/images/letra-m.png">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <title>Grados</title>
</head>

<body id="body-pd" style="margin-top: 0px;">
    <?php require('./menu_admin/menu-admin.php') ?>
    <h1 style="text-align:center;color:black;">Grados</h1>
    <div style="margin-top: 55px;">
        <div>
            <div class="dt-buttons">
                    <!--botón de listar-->
                    <a href="../vistas/grados.php" class="btn btn-dark" style="padding-left: 11px;padding-right: 10px;" type="submit" name="listar"><i style="color:white;" class="fas fa-spinner"></i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-hover mx-auto">
                <thead style="background-color:#23272b">
                    <tr class="text-center">
                        <th class="text-nowrap text-light">Codigo grado</th>
                        <th class="text-nowrap text-light">Grado</th>
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
                                <td style="text-align: center; background-color: #FFFFFF"><?php echo $arreglo2['cod_grado'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"> <?php echo $arreglo2['grado'] ?></td>
                            </tr>
                    <?php
                        } while ($arreglo2 = mysqli_fetch_assoc($resultado2));
                    }
                    ?>
                </tbody>
            </table>
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