<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from horarios";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$idHorarios = $_GET['idHorarios'];

$consulta= "DELETE FROM horarios where idHorarios like $idHorarios";
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "No se eliminó!";
}
else {
    header("Location:../../vistas/horarios.php");
}
?>
