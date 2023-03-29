<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * from administrador";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

if (isset($_POST["submit"])) {
    $primer_nombre_admin = $_POST["primer_nombre_admin"];
    $segundo_nombre_admin = $_POST["segundo_nombre_admin"];
    $primer_apellido_admin = $_POST["primer_apellido_admin"];
    $segundo_apellido_admin = $_POST["segundo_apellido_admin"];
    $cod_t_d_ = $_POST["cod_t_d_"];
    $cod_admin = $_POST["cod_admin"];
    $email = $_POST["email"];
    $cod_rol= $_POST["cod_rol"];
    $password = $_POST["password"];

    $verificar_correo_admin = mysqli_query($con, "SELECT * FROM administrador WHERE correo_admin = '$email'");
    if (mysqli_num_rows($verificar_correo_admin) > 0) {
        echo "<script 'text/javascript'>alert('El correo esta registrado, por favor intente con otro.');
    window.locatiomn.href='registro_admin.php';
    </script>";
    } else {
        if ($password != 0) {

            $contraseña_fuerte = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO administrador (cod_admin, primer_nombre_admin, segundo_nombre_admin, primer_apellido_admin, segundo_apellido_admin, correo_admin, contraseña_admin, cod_t_d_, cod_rol) values ('$cod_admin', '$primer_nombre_admin', '$segundo_nombre_admin', '$primer_apellido_admin', '$segundo_apellido_admin', '$email', '$contraseña_fuerte', '$cod_t_d_', '$cod_rol')";

            $nueva = mysqli_query($con, $sql);
            if ($nueva) {
                echo "Usuario creado";
            } else {
                die("Se ha cometido un error" . mysqli_error($con));
            }
        } else {
            echo "Está aquí";
        }
    }
}
?>