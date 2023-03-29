<?php
include("../../conexion/conectar.php");
session_start();
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM alumno";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

if (isset($_GET['cerrar_session'])) {
    session_unset();

    session_destroy();
}


if (isset($_POST["btningresar"])) {
    $usuario = $_POST["usuario"];
    $contraseña_alum = $_POST["password"];

    $sql = "SELECT * FROM alumno WHERE correo ='$usuario'";
    $ejecuta = mysqli_query($con, $sql);
    $resultado1 = mysqli_fetch_assoc($ejecuta);
    $estado = $resultado1['estado'];



    if (password_verify($contraseña_alum, $resultado1['contraseña_alum'])) {
        if($estado == 0){
            echo 'Usuario Inactivo.';
        } else{
            $_SESSION['id_documento'] = $resultado1['id_documento'];
            $_SESSION['primer_nombre'] = $resultado1['primer_nombre'];
            $_SESSION['primer_apellido'] = $resultado1['primer_apellido'];
            $_SESSION['tel_cel'] = $resultado1['tel_cel'];
            $_SESSION['cod_cursos'] = $resultado1['cod_cursos'];
            $_SESSION['contraseña_alum'] = $resultado1['contraseña_alum'];
            header("Location: ../../vistas/MuroE.php");   
        }
    } else {
        echo "<script 'text/javascript'>alert('No está registrado.');
        window.location.href='../../vistas/formularios/inicio_sesion/login_alumno.php';
        </script>";
    }
}
?>