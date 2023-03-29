<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from alumno";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$id_documento = $_POST['id_documento'];
$cod_t_d_ = $_POST['cod_t_d_'];
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$tel_cel = $_POST['telefono'];
$correo = $_POST['email'];
$cod_cursos = $_POST['cod_cursos'];

    $consulta= "UPDATE alumno set
    cod_t_d_ = '$cod_t_d_',
    primer_nombre='$primer_nombre', 
    segundo_nombre='$segundo_nombre',
    primer_apellido='$primer_apellido', 
    segundo_apellido='$segundo_apellido', 
    tel_cel='$tel_cel', 
    correo='$correo',
    cod_cursos= '$cod_cursos'
    where alumno.id_documento like $id_documento";

    $resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "No se modificó!";
}
else {
    header("Location: ../../vistas/alumno.php");
}
?>