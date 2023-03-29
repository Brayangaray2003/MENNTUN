<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM tipo_documento";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$tipo_documento = $_POST['tipo_documento'];

$verificar = "SELECT * FROM tipo_documento WHERE tipo_documento LIKE '$tipo_documento'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'El tipo de documento ya existe';
} else{
    $consulta= "INSERT INTO tipo_documento (`tipo_documento`) 
    VALUES ('$tipo_documento')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/tipo_documento.php");
}
}
?>