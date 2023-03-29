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
$query2 = "SELECT * FROM tipo_documento";
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
    <title>Tipo documento</title>
</head>

<body id="body-pd" style="margin-top: 0px;">
    <?php require('./menu_admin/menu-admin.php') ?>
    <h1 style="text-align:center;color:black;">Tipo Documento</h1>
    <div style="margin-top: 55px;">
        <div>
            <div class="dt-buttons">
                <!--botón de agregar-->
                <div class="col-2 me-2 py-2" style="padding-left: 2px;padding-right: 9px;">
                    <a class="btn btn-dark" style="padding-right: 9px;padding-left: 10px;border-left-width: 1px;" href="../vistas/formularios/funcion_agregar/agregardocu.php" role="button">
                        <i style="color:white;" class="bi bi-plus-circle-dotted"></i>
                    </a>
                    <!--botón de listar-->
                    <a href="../vistas/tipo_documento.php" class="btn btn-dark" style="padding-left: 11px;padding-right: 10px;" type="submit" name="listar"><i style="color:white;" class="fas fa-spinner"></i></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-hover mx-auto">
                <thead style="background-color:#23272b">
                    <tr class="text-center">
                        <th class="text-nowrap text-light">Cod. Documento</th>
                        <th class="text-nowrap text-light">Tipo documento</th>
                        <th class="text-nowrap text-light">Estado</th>
                        <th class="text-nowrap text-light">Modificar</th>
                        <th class="text-nowrap text-light">A-D</th>

                    </tr>
                </thead>
                <tbody class="table-light text-black">
                    <?php
                    if ($arreglo2 == 0) {
                        echo "no hay registros";
                    } else {
                        do {
                            if ($arreglo2['estado'] == 0) {
                                $estado = "Inactivo";
                            } elseif ($arreglo2['estado'] == 1) {
                                $estado = "Activo";
                            }
                    ?>
                            <tr>
                                <td style="text-align: center; background-color: #FFFFFF"><?php echo $arreglo2['cod_t_d_'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"> <?php echo $arreglo2['tipo_documento'] ?></td>
                                <td style="text-align: center;background-color: #FFFFFF"><?php echo $estado ?></td>

                                <!--botón de modificar-->
                                <td style="text-align: center;background-color: #FFFFFF">
                                    <div class="mx-auto" style="max-width: 42px;">
                                        <a class="btn btn-link" href="../vistas/formularios/funcion_modificar/modificardocu.php?
                                        cod_t_d_=<?php echo $arreglo2['cod_t_d_'] ?> &
                                        tipo_documento=<?php echo $arreglo2['tipo_documento'] ?>" role="button"
                                        class="btn btn" style="color: #2e4f4f; border: none; font-size: 15px"><i class="fa-solid fa-pen-to-square"></i></a>
                                <!--botón de activar/desactivar-->
                                <td style="text-align: center;background-color: #FFFFFF">
                                    <div class="mx-auto" style="max-width: 42px;">
                                        <?php
                                        if ($arreglo2['estado'] == 0) {
                                            echo '<a class="btn btn-link" name="eliminar" href="../controlador/fun_eliminar/eliminardocu.php? 
                                    cod_t_d_= ' . $arreglo2['cod_t_d_'] . ' & estado= ' . $arreglo2['estado'] . '" role="button" onclick="return confirmacion()class="btn btn" style="color: #2e4f4f; border: none; font-size: 15px"><i class="bx bxs-user-check bx-flashing bx-sm"></i></a>';
                                        } elseif ($arreglo2['estado'] == 1) {
                                            echo '<a class="btn btn-link" name="eliminar" href="../controlador/fun_eliminar/eliminardocu.php? 
                                    cod_t_d_= ' . $arreglo2['cod_t_d_'] . ' & estado= ' . $arreglo2['estado'] . '"" role="button" onclick="return confirmacion()class="btn btn" style="color: #2e4f4f; border: none; font-size: 15px"><i class="bx bxs-user-x bx-flashing bx-sm"></i></a>';
                                        }
                                        ?>
                                    </div>
                                </td>
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