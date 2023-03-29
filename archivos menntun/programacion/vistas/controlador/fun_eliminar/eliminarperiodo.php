<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from periodo";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_periodo = $_GET['cod_periodo'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE periodo SET estado = 1 WHERE cod_periodo=$cod_periodo";
} elseif($estado==1){
    $consulta="UPDATE periodo SET estado = 0 WHERE cod_periodo=$cod_periodo";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/periodo.php");
}
?>