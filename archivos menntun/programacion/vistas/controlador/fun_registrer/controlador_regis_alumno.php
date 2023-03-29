<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from alumno";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

if (isset($_POST["submit"])) {
    $primer_nombre = $_POST["primer_nombre"];
    $segundo_nombre = $_POST["segundo_nombre"];
    $primer_apellido = $_POST["primer_apellido"];
    $segundo_apellido = $_POST["segundo_apellido"];
    $cod_t_d_ = $_POST['cod_t_d_'];
    $id_documento = $_POST["id_documento"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $cod_cursos = $_POST["cod_cursos"];
    $cod_rol = $_POST["cod_rol"];
    $password = $_POST["password"];

    $verificar_correo = mysqli_query($con, "SELECT * FROM alumno WHERE correo = '$email'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo "<script 'text/javascript'>alert('El correo esta registrado, por favor intente con otro.');
    window.locatiomn.href='registro.php';
    </script>";
    } else {
        if ($password != 0) {

            $contraseña_fuerte = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO alumno (id_documento, cod_t_d_, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, tel_cel, correo, contraseña_alum, cod_cursos, cod_rol) VALUES ('$id_documento', '$cod_t_d_', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$telefono', '$email', '$contraseña_fuerte', '$cod_cursos', '$cod_rol')";

            $nueva = mysqli_query($con, $sql);
            if ($nueva) {
                echo "Usuario creado";
            } else {
                die("se ha cometido un error" . mysqli_error($con));
            }
        } else {
            echo "Estás aquí";
        }
    }
}
?>