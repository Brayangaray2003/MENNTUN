<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$id_documento_doc = $_POST['id_documento_doc'];
$cod_t_d_ = $_POST['cod_t_d_'];
$primer_nombre_doc = $_POST['primer_nombre_doc'];
$segundo_nombre_doc = $_POST['segundo_nombre_doc'];
$primer_apellido_doc = $_POST['primer_apellido_doc'];
$segundo_apellido_doc = $_POST['segundo_apellido_doc'];
$correo_doc = $_POST['correo_doc'];
$cod_asignatura = $_POST['cod_asignatura'];

    $consulta= "UPDATE docente set 
    cod_t_d_='$cod_t_d_', 
    primer_nombre_doc='$primer_nombre_doc',
    segundo_nombre_doc='$segundo_nombre_doc', 
    primer_apellido_doc='$primer_apellido_doc', 
    segundo_apellido_doc='$segundo_apellido_doc', 
    correo_doc='$correo_doc', 
    cod_asignatura= '$cod_asignatura'
    where id_documento_doc like $id_documento_doc";

    $resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "No se moificó!";
}
else {
    header("Location:../../vistas/docente.php");
}
?>