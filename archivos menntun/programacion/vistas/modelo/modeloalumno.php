<?php
include("../conexion/conectar.php");
class alumno{
    
public $numeroAlumno;
public $idDocumento;
public $nombreAlumno1;
public $nombreAlumno2;
public $apellidoAlumno1;
public $apellidoAlumno2;
public $sexoAlumno;
public $direccionAlumno;
public $telefonoAlumno;
public $correoAlumno;
public $acudienteAlumno;
public $telefonoAcudienteAlumno;

function agregar(){
$conet = new Conexion();
$con = $conet->conectando();
$query = "SELECT * from alumno where numeroAlumno = '$this->numeroAlumno'";
$resultado = mysqli_query($con, $query);
if(mysqli_fetch_array($resultado)){
echo "<script> alert('El Alumno ya Existe en el Sistema')</script>";
}else{


$insertar = "INSERT into alumno value(
    '$this->numeroAlumno',
    '$this->idDocumento',
    '$this->nombreAlumno1',
    '$this->nombreAlumno2', 
    '$this->apellidoAlumno1', 
    '$this->apellidoAlumno2', 
    '$this->sexoAlumno',
    '$this->direccionAlumno',
    '$this->telefonoAlumno',
    '$this->correoAlumno',
    '$this->acudienteAlumno',
    '$this->telefonoAcudienteAlumno'
    )";
echo $insertar;
mysqli_query($con,$insertar);
echo "<script> alert('El Alumno fue creado en el Sistema')</script>";
}

}

function modificar(){

}   
                    
function eliminar(){

}

function limpiar(){

}
    }
    ?>
