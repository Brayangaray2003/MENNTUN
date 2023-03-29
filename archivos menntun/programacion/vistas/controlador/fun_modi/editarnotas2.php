<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();

$query = "SELECT * from actividad";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_actividad = $_POST['cod_actividad'];

$actividad = $_POST['actividad'];
$cod_nota = $_POST['cod_nota'];
$periodo = $_POST['cod_periodo'];

$consulta = "UPDATE  actividad set 
actividad='$actividad', 
cod_nota='$cod_nota', 
cod_periodo='$periodo' 
WHERE cod_actividad=$cod_actividad";

$resultado = mysqli_query($con, $consulta);

if (!$resultado) { 
    echo "No se actualizó";
} else {
    header("Location:../../vistas/subirnotas.php");
}
?>
