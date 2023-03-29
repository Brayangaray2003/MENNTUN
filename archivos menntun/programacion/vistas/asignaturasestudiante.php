<html>
<link rel="shortcut icon" type="image/x-icon" href="../config/images/letra-m.png">

</html>
<?php

include("../conexion/conectar.php");
session_start();
$user = $_SESSION['id_documento'];
if ($_POST) {
    $obj->$id_documento_doc = $_POST['id_documento_doc'];
}
$conet = new Conexion();
$con = $conet->conectando();

if (!isset($_SESSION['id_documento'])) {
    header("location: ../../formularios/inicio_sesion/login_alumno.php");
} else {
$curso = $_SESSION['id_documento'];
$querycursos = "SELECT 'id_documento'  FROM horario WHERE 'id_documento' = '$curso'";
$resultadocursos = mysqli_query($con, $querycursos);
$arreglocursos = mysqli_fetch_assoc($resultadocursos);
$curso = $arreglocursos['cod_cursos'];
} 

$query = "SELECT COUNT(*) AS totalRegistros FROM docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);
$totalRegistros = $arreglo['totalRegistros'];
echo $totalRegistros;

$maximoRegistros = 11;
//echo $totalRegistros;
if (empty($_GET['pagina'])) {
    $pagina = 1;
} else {
    $pagina = $_GET['pagina'];
}
$desde = ($pagina - 1) * $maximoRegistros;
$totalPaginas = ceil($totalRegistros / $maximoRegistros);

if (isset($_POST['search'])) {
    echo "llegue";
    $query2 = "SELECT docente.primer_nombre_doc,docente.segundo_nombre_doc,docente.primer_apellido_doc,docente.segundo_apellido_doc, asignatura.asignatura from docente INNER JOIN asignatura on docente.cod_asignatura = asignatura.cod_asignatura
    where asignatura.asignatura 
    like '%$obj->$asignatura%' 
    limit $desde,$maximoRegistros ";
    $resultado2 = mysqli_query($con, $query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
} else {

    $query2 = "SELECT docente.primer_nombre_doc,docente.segundo_nombre_doc,docente.primer_apellido_doc,docente.segundo_apellido_doc, asignatura.asignatura from docente INNER JOIN asignatura on docente.cod_asignatura = asignatura.cod_asignatura
    limit $desde,$maximoRegistros ";
    $resultado2 = mysqli_query($con, $query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
    <script src="https://kit.fontawesome.com/6090c943f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../config/styles/materiasestudiante.css">
    <title>Materias</title>
</head>

<body>
    <header><br>
        <div>
            <h1 style="text-align: center; color:white">Asignaturas</h1>
            <img src="../config/images/logomenntunb.png" class="img-fluid">
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                <?php
                if ($arreglo2 == 0) {
                    echo "no hay registros";
                } else {
                    do {
                ?>
                        <div class="col">
                            <div class="card ">

                                <!-- <img src="images/computer.jpg">   -->
                                <div class="card-body">
                                    <h5>
                                        <p class="card-tittle" style="text-align:center;"> <?php echo $arreglo2[4] ?></p>
                                    </h5>
                                    <h6>
                                        <p class="card-text" style="text-align:center;"> <?php echo $arreglo2[0] ?> <?php echo $arreglo2[1] ?> <?php echo $arreglo2[2] ?> <?php echo $arreglo2[3] ?></p>
                                    </h6>
                                    <div class="   align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    } while ($arreglo2 = mysqli_fetch_array($resultado2));
                }
                ?>

            </div>
        </div>
        <div class="Regresar " style="margin-top: 20px" style="width: 150px;">
            <div class="row w-100 align-items-center" class=botonera></div>
            <a href="MuroE.php?" type="button" class="btn btn-link">Regresar</a>

                <!--botón de imprimir-->
                <a href="" class="btn btn" onclick="window.print()" style="background-color: white; color: black;"><i class="fa-solid fa-print" style="font-size: 16px;"></i></a>
                <!--botón de exel-->
                <!-- <a href="../reportes/docente/exeleditarnotas.php" class="btn btn" style="background-color: white; color: green;"><i class="fa-solid fa-file-excel" style="font-size: 16px;"></i></a> -->
                <!--botón de PDF-->
                <!-- <a href="../reportes/docente/pdfeditarnotas.php" class="btn btn" style="background-color: white; color: red;"><i class="fa-solid fa-file-pdf" style="font-size: 16px"></i></a> -->
            </div>
        </div>
        </mainss>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                if ($pagina != 1) {
                ?>
                    <li class="page-item ">
                        <a class="page-link" href="?pagina=<?php echo 1; ?>">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link justify-content-center" href="?pagina=<?php echo $pagina - 1; ?>">
                        </a>
                    </li>
                <?php
                }
                for ($i = 1; $i <= $totalPaginas; $i++) {
                    if ($i == $pagina) {
                        echo '<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '<li class="page-item "><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                    }
                }
                if ($pagina != $totalPaginas) {
                ?>

                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina + 1; ?>">>></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
   <!-- <footer class="footer">
        <div class="container">
           <div class="row">
            <div class="footer-col">
            <figure>
                <a href="#">
                    <img src="../config/images/logomenntunb.png" alt="logo de slee Dw">
                </a>
            </figure>
            </div>
            <div class="footer-col">
                <h4>quienes somos</h4>
                <ul>
                    <li><a href="inicio.php""> Menntun es una plataforma web la cual permite a los estudiantes de una institucion educativa gestionar procesos academicos. </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>redes sociales</h4>
                <div class="social-links">
                    <a target="_blank" href="https://instagram.com/menntun7?igshid=ZDdkNTZiNTM="><i class="fa-brands fa-instagram" id="instagram"></i></a>
                    <a target="_blank" href="https://www.facebook.com/Menntun-104920439205172/"><i class="fa fa-facebook-square" id="facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/Menntun_?t=95No8SYpd9Xia_cRlDiCog&s=09"><i class="fa fa-twitter" id="twitter"></i></a>
                 </div>
            </div>
            </div>
        </div>
    </div>
</footer>-->
    
<!--<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <figure>
                    <img src="../config/images/logomenntunb.png" alt="logo de slee Dw">
                </figure>
            </div>
            <div class="footer-col">
                <h4>Quiénes Somos</h4>
                <ul>
                    <li><a href="inicio.php"> Menntun es una plataforma web la cual permite a los estudiantes de una institucion educativa gestionar procesos academicos. </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Redes Sociales</h4>
                <div class=" social-links ">
                    <a href="https://instagram.com/menntun7?igshid=ZDdkNTZiNTM="><i class="fa-brands fa-instagram" id="instagram"></i></a>
                    <a href="https://www.facebook.com/Menntun-104920439205172/"><i class="fa fa-facebook-square" id="facebook"></i></a>
                    <a href="https://twitter.com/Menntun_?t=95No8SYpd9Xia_cRlDiCog&s=09"><i class="fa fa-twitter" id="twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>-->
</body>
</html>