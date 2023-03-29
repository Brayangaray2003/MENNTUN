<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from periodo";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_periodo = $_POST['cod_periodo'];
$periodo = $_POST['periodo'];


$consulta = "UPDATE periodo set periodo='$periodo'
where cod_periodo like $cod_periodo";

$resultado = mysqli_query($con, $consulta);

if (!$resultado) {
    echo "No se modificó!";
} else {
    header("Location: ../../vistas/periodo.php ");
}
?>