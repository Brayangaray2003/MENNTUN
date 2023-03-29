<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM periodo";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$periodo = $_POST['periodo'];

$verificar = "SELECT * FROM periodo WHERE periodo LIKE '$periodo'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'El periodo ya existe';
} else{
    $consulta= "INSERT INTO periodo (`periodo`) 
    VALUES ('$periodo')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/periodo.php");
}
}
?>