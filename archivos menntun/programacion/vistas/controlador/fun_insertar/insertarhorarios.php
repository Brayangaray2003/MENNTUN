<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * FROM horario";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$id_documento_doc = $_POST['id_documento_doc'];
$horario_inicial = $_POST['horario_inicial'];
$horario_final = $_POST['horario_final'];
$cod_cursos = $_POST['cod_cursos'];
$fecha = $_POST['fecha'];
$aula = $_POST['aula'];

$verificar = "SELECT * FROM horario WHERE id_documento_doc = $id_documento_doc AND fecha = '$fecha' 
AND ((horario_inicial BETWEEN '$horario_inicial' AND '$horario_final') 
OR (horario_final BETWEEN '$horario_inicial' AND '$horario_final') 
OR ('$horario_inicial' BETWEEN horario_inicial AND horario_final) 
OR ('$horario_final' BETWEEN horario_inicial AND horario_final))";
$resultado_verificar = mysqli_query($con, $verificar);
if (mysqli_num_rows($resultado_verificar) > 0) {
    echo "El horario del docente está duplicado o cruzado, por favor elige otro horario";
} else {
        $consulta= "INSERT INTO horario (`id_documento_doc`, `horario_inicial`,`horario_final`,`cod_cursos`,`fecha`,`aula`) VALUES ('$id_documento_doc','$horario_inicial', '$horario_final', '$cod_cursos', '$fecha', '$aula')"; 

$resultado = mysqli_query($con, $consulta);
if(!$resultado){
    echo "No se insertó!";
}
else {
    header("Location:../../vistas/horarios.php");
}
}
?>