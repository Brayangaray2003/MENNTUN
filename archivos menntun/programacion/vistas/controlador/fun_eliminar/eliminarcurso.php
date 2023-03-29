<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "select * from cursos";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_cursos= $_GET['cod_cursos'];
$estado = $_GET['estado'];

echo $estado;
if($estado==0){
    $consulta="UPDATE cursos SET estado = 1 WHERE cod_cursos=$cod_cursos";
} elseif($estado==1){
    $consulta="UPDATE cursos SET estado = 0 WHERE cod_cursos=$cod_cursos";
}
$resultado = mysqli_query($con, $consulta);

if(!$resultado){
    echo "Ocurrió  un error";
}
else {

    header("Location:../../vistas/cursos.php");
}
?>