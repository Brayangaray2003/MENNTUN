<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from grados";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$idGrados = $_GET['idGrados'];

$consulta= "DELETE FROM grados where idGrados like $idGrados";
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "No se eliminó!";
}
else {
    header("Location:../../vistas/grados.php");
}
?>
