<?php
include("../../conexion/conectar.php");
session_start();
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * from docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

if(isset ($_GET['cerrar_session'])){
    session_unset();

    session_destroy();
}


if(isset($_POST["btningresar"])){
        $usuario=$_POST["docente"];
        $contraseña_doc=$_POST["password"];

        $sql="SELECT * FROM docente WHERE correo_doc ='$usuario'";
        $ejecuta = mysqli_query($con, $sql);
        $resultado1 = mysqli_fetch_assoc($ejecuta);
        $estado = $resultado1['estado'];

        if (password_verify($contraseña_doc, $resultado1['contraseña_doc'])) {
            if($estado == 0){
                echo 'Usuario Inactivo.';
            } else{
            $_SESSION['id_documento_doc']=$resultado1['id_documento_doc'];
            $_SESSION['primer_nombre_doc']=$resultado1['primer_nombre_doc'];
            $_SESSION['primer_apellido_doc']=$resultado1['primer_apellido_doc'];
            header("Location: ../../vistas/MuroD.php");  
            }
        }else{
            echo "<script 'text/javascript'>alert('No está registrado.');
            window.location.href='../../vistas/formularios/inicio_sesion/login_docente.php';
            </script>";
    }
}
?>