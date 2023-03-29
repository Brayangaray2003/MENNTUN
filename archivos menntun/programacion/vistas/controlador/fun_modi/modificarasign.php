<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from asignatura";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_asignatura = $_POST['cod_asignatura'];
$asignatura = $_POST['asignatura'];


$consulta = "UPDATE asignatura set asignatura='$asignatura'
where cod_asignatura like $cod_asignatura";

$resultado = mysqli_query($con, $consulta);

if (!$resultado) {
    echo "No se modificó!";
} else {
    header("Location: ../../vistas/asignatura.php ");
}
?>