<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);


if (isset($_POST["submit"])) {
    $primer_nombre_doc = $_POST["primer_nombre_doc"];
    $segundo_nombre_doc = $_POST["segundo_nombre_doc"];
    $primer_apellido_doc = $_POST["primer_apellido_doc"];
    $segundo_apellido_doc = $_POST["segundo_apellido_doc"];
    $cod_t_d_ = $_POST['cod_t_d_'];
    $id_documento_doc = $_POST["id_documento_doc"];
    $email = $_POST["email"];
    $cod_asignatura = $_POST["cod_asignatura"];
    $cod_rol = $_POST["cod_rol"];
    $password = $_POST["password"];

    $verificar_correo_doc = mysqli_query($con, "SELECT * FROM docente WHERE correo_doc = '$email'");
    if (mysqli_num_rows($verificar_correo_doc) > 0) {
        echo "<script 'text/javascript'>alert('El correo esta registrado, por favor intente con otro.');
    window.locatiomn.href='registro.php';
    </script>";
    } else {
        if ($password != 0) {

            $contraseña_fuerte = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO docente (id_documento_doc, cod_t_d_, primer_nombre_doc, segundo_nombre_doc, primer_apellido_doc, segundo_apellido_doc, correo_doc, contraseña_doc, cod_asignatura, cod_rol) VALUES ('$id_documento_doc', '$cod_t_d_', '$primer_nombre_doc', '$segundo_nombre_doc', '$primer_apellido_doc', '$segundo_apellido_doc', '$email', '$contraseña_fuerte', '$cod_asignatura', '$cod_rol')";

            $nueva = mysqli_query($con, $sql);
            if ($nueva) {
                echo "usuario creado";
            } else {
                die("se ha cometido un error" . mysqli_error($con));
            }
        } else {
            echo "estas aqui";
        }
    }
}
?>