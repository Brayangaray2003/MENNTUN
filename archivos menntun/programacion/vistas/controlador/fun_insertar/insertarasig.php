<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM asignatura";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$asignatura = $_POST['asignatura'];

$verificar = "SELECT * FROM asignatura WHERE asignatura LIKE '$asignatura'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'La asignatura ya existe';
} else{
    $consulta= "INSERT INTO asignatura (`asignatura`) 
    VALUES ('$asignatura')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/asignatura.php");
}
}

?>