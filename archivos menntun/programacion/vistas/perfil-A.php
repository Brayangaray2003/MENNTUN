<?php
include("../conexion/conectar.php");
session_start();
$user = $_SESSION['primer_nombre'];
$ape = $_SESSION['primer_apellido'];
$tel = $_SESSION['tel_cel'];;
$curso = $_SESSION['cod_cursos'];;
$contraseña = $_SESSION['contraseña_alum'];;
$conet = new Conexion();
$con = $conet->conectando();


if (!isset($_SESSION['id_documento'])) {
    header("location: ../../formularios/inicio_sesion/login_alumno.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil <?php echo $user . " " . $ape ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="../config/images/letra-m.png">
    <link rel="stylesheet" type="text/css" href="../config/styles/style-p.css">
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <!--<div class="perfil-usuario-avatar">
                    <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>-->
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $user . " " . $ape ?></h3>
                <p class="texto">
                </p>Nunca consideres el estudio como una obligación, sino como una oportunidad para penetrar el bello y maravilloso mundo del saber. <br> -Albert Einstein.
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-phone-alt"></i><?php echo $tel . " " ?></li>
                    <li><i class="icono fas fa-building"></i> Colegio: El Diamante</li>
                </ul>
            </div>
            <div class="apartados">
                <a href="../vistas/asignaturasestudiante.php" class="boton-apart editnotas fa-solid fa-flask-vial mt-4"></a>
                <a href="../vistas/alumnotas.php" class="boton-apart horarios fa-solid fa-book mt-4"></a>
                <a href="../vistas/MuroE.php" class="boton-apart devolverse fa-sharp fa-solid fa-arrow-left"></a>
            </div>
        </div>
    </section>