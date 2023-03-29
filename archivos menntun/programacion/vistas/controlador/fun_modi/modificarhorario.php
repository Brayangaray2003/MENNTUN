<?php
include("../../conexion/conectar.php");
$conet = new Conexion();
$con = $conet->conectando();

$query = "select * from horario";
$resultado = mysqli_query($con, $query);
$arreglo = mysqli_fetch_array($resultado);

$cod_horario = $_POST['cod_horario'];
$id_documento_doc = $_POST['id_documento_doc'];
$horario_inicial = $_POST['horario_inicial'];
$horario_final = $_POST['horario_final'];
$cod_cursos = $_POST['cod_cursos'];
$fecha = $_POST['fecha'];
$aula = $_POST['aula'];

// Verificar si el horario del docente está duplicado o cruzado
$verificar = "SELECT * FROM horario WHERE id_documento_doc = $id_documento_doc AND fecha = '$fecha' 
AND ((horario_inicial BETWEEN '$horario_inicial' AND '$horario_final') 
OR (horario_final BETWEEN '$horario_inicial' AND '$horario_final') 
OR ('$horario_inicial' BETWEEN horario_inicial AND horario_final) 
OR ('$horario_final' BETWEEN horario_inicial AND horario_final)) 
AND cod_horario != $cod_horario";
$resultado_verificar = mysqli_query($con, $verificar);
if (mysqli_num_rows($resultado_verificar) > 0) {
    echo "El horario del docente está duplicado o cruzado, por favor elige otro horario";
} else {
    $consulta = "UPDATE horario SET
    id_documento_doc = '$id_documento_doc',
    horario_inicial = '$horario_inicial', 
    horario_final = '$horario_final', 
    cod_cursos = '$cod_cursos', 
    fecha = '$fecha', 
    aula = '$aula' 
    WHERE cod_horario = $cod_horario";

    $resultado = mysqli_query($con, $consulta);

    if (!$resultado) {
        echo "No se modificó!";
    } else {
        header("Location:../../vistas/horarios.php");
    }
}
?>