<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from tipo_documento";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_t_d_ = $_GET['cod_t_d_'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE tipo_documento SET estado = 1 WHERE cod_t_d_=$cod_t_d_";
} elseif($estado==1){
    $consulta="UPDATE tipo_documento SET estado = 0 WHERE cod_t_d_=$cod_t_d_";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/tipo_documento.php");
}
?>