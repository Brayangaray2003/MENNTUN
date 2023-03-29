<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM grado";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_grado = $_POST['cod_grado'];
$grado = $_POST['grado'];

$verificar = "SELECT * FROM grado WHERE grado LIKE '$grado'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'El grado ya existe';
} else{
    $consulta= "INSERT INTO grado (`cod_grado`, `grado`) 
    VALUES ('$cod_grado','$grado')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/grado.php");
}
}
?>