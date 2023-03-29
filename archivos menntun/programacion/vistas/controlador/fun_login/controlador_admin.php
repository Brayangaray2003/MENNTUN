<?php
include("../../conexion/conectar.php");
session_start();
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM administrador";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

if (isset($_GET['cerrar_session'])) {
    session_unset();

    session_destroy();
}

if (isset($_POST["btningresar"])) {
    $usuario = $_POST["administrador"];
    $contraseña_admin = $_POST["password"];

    $sql = "SELECT * FROM administrador WHERE correo_admin ='$usuario'";
    $ejecuta = mysqli_query($con, $sql);
    $resultado1 = mysqli_fetch_assoc($ejecuta);
    $estado = $resultado1['estado'];

    if (password_verify($contraseña_admin, $resultado1['contraseña_admin'])) {
        if($estado == 0){
            echo 'Usuario Inactivo.';
        } else{
        $_SESSION['cod_admin'] = $resultado1['cod_admin'];
        $_SESSION['primer_nombre_admin'] = $resultado1['primer_nombre_admin'];
        $_SESSION['primer_apellido_admin'] = $resultado1['primer_apellido_admin'];
        header("location: ../../vistas/bienve_admin.php");
        }
    } else {
        echo "<script 'text/javascript'>alert('No está registrado.');
        window.location.href='../../vistas/formularios/inicio_sesion/login_admin.php';
        </script>";
    }
}
?>