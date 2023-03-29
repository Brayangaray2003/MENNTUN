<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM alumno";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$id_documento = $_GET['id_documento'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE alumno SET estado = 1 WHERE id_documento=$id_documento";
} elseif($estado==1){
    $consulta="UPDATE alumno SET estado = 0 WHERE id_documento=$id_documento";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/alumno.php");
}
?>