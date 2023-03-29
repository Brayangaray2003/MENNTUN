<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from tipo_documento";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_t_d_ = $_POST['cod_t_d_'];
$tipo_documento = $_POST['tipo_documento'];


$consulta = "UPDATE tipo_documento set tipo_documento='$tipo_documento'
where cod_t_d_ like $cod_t_d_";

$resultado = mysqli_query($con, $consulta);

if (!$resultado) {
    echo "No se modificó!";
} else {
    header("Location: ../../vistas/tipo_documento.php ");
}
?>