<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * from actividad";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$actividad = $_POST['actividad'];
$asignatura2 = $_POST['cod_asignatura'];
$id_documento = $_POST['id_documento'];
$nota = $_POST['cod_nota'];
$periodo = $_POST['cod_periodo'];
$doc_docente = $_POST['id_documento_doc'];


$verificar = "SELECT * FROM actividad WHERE actividad LIKE '$actividad'";
$ejecutar = mysqli_query($con, $verificar);

if(mysqli_num_rows($ejecutar) > 0 ){
    echo 'La nota ya se asignó';
} else{
    $consulta = "INSERT INTO actividad (`actividad`, `cod_asignatura`, `id_documento`, `cod_nota`, `cod_periodo`, `id_documento_doc`) 
    VALUES ('$actividad', '$asignatura2', '$id_documento', '$nota', '$periodo', '$doc_docente')";


$resultado = mysqli_query($con, $consulta);
if(!$resultado){
echo "No se insertó!";
}
else {
header("Location:../../vistas/subirnotas.php");
}
}
?>