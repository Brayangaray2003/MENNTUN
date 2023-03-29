<?php
include("../conexion/conectar.php");
session_start();
$user = $_SESSION['primer_nombre_doc'];
$ape = $_SESSION['primer_apellido_doc'];
$conet = new Conexion();
$con = $conet->conectando();

if(!isset($_SESSION['id_documento_doc'])){
    header("location: ../../formularios/inicio_sesion/login_docente.php");
}
?>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../config/styles/Muros.css">
    <link rel="icon" type="image/x-icon" href="../config/images/letra-m.png">
    <title>Docente</title>
</head>

<body>
    <div class="encabezado">
    <img class="M" src="../config/images/logomenntunb.png">
        <h1>Docente</h1>
        <h3 class= "text-light"><?php echo $user. " ". $ape?></h3>
    </div>
    <div class="gradient">
        <nav class="menu">
            <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
            <label class="menu-open-button" for="menu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
            </label>

            <a href="../controlador/fun_logout/logout_docente.php" class="menu-item"><i class="fa-solid fa-arrow-right-from-bracket mt-4"></i></a>
            <a href="subirnotas.php" class="menu-item"><i class="fa-solid fa-file-arrow-up mt-4"></i></a>
            <a href="tablahorariodoc.php" class="menu-item"><i class="fa-solid fa-school mt-4"></i></a>
            <a href="perfil-D.php" class="menu-item"><i class="fa-regular fa-user mt-4"></i></a>
            <a href="faq.php" class="menu-item "><i class="fa-regular fa-circle-question mt-4"></i></a>
        </nav>
    </div>
</body>
</html>