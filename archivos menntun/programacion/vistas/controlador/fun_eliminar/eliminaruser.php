<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from docente";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$id_documento_doc = $_GET['id_documento_doc'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE docente SET estado = 1 WHERE id_documento_doc=$id_documento_doc";
} elseif($estado==1){
    $consulta="UPDATE docente SET estado = 0 WHERE id_documento_doc=$id_documento_doc";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/docente.php");
}
?>