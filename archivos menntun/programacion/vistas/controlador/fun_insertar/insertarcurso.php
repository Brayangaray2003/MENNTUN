<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM cursos";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$curso = $_POST['curso'];
$cod_grado = $_POST['cod_grado'];

$verificar = "SELECT * FROM cursos WHERE curso LIKE '$curso' AND cod_grado LIKE '$cod_grado'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'El curso con esa asignatura ya existe';
} else{
    $consulta= "INSERT INTO cursos (`curso`, `cod_grado`) 
    VALUES ('$curso','$cod_grado')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/cursos.php");
}
}
?>