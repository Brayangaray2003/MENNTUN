<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM asignatura";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_asignatura = $_GET['cod_asignatura'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE asignatura SET estado = 1 WHERE cod_asignatura=$cod_asignatura";
} elseif($estado==1){
    $consulta="UPDATE asignatura SET estado = 0 WHERE cod_asignatura=$cod_asignatura";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/asignatura.php");
}
?>