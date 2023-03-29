<?php
class docentes
{

    public $numeroDocentes;
    public $idDocumento;
    public $nombreDocentes1;
    public $nombreDocente2;
    public $apellidoDocente1;
    public $apellidoDocente2;
    public $idProfecciones;
    public $telefonoDocentes;
    public $correoDocente;
    public $imagenDocente;

    function agregar()
    {
        $conet = new Conexion();
        $con = $conet->conectando();
        $query = "SELECT * FROM docentes WHERE numeroDocentes = '$this->numeroDocentes'";
        $resultado = mysqli_query($con, $query);
        if (mysqli_fetch_array($resultado)) {
            echo "<script> alert('El Docente ya Existe en el Sistema')</script>";
        } else {

            $img = $_FILES['imagenDocente']['name'];
            $ruta = '../vistas/images/docentes/'.$img;
            move_uploaded_file($this->imagenDocente, $ruta);

            if ($resultado) {
                $insertar = "INSERT INTO docente (numeroDocentes, idDocumento, nombreDocentes1, nombreDocente2, apellidoDocente1, apellidoDocente2,idProfecciones, direccionAlumno, telefonoDocentes, correoDocente, imagenDocente) VALUES (
    '$this->numeroDocentes',
    '$this->idDocumento',
    '$this->nombreDocentes1',
    '$this->nombreDocente2', 
    '$this->apellidoDocente1', 
    '$this->apellidoDocente2', 
    '$this->idProfecciones',
    '$this->telefonoDocentes',
    '$this->correoDocente',
    NOW(), NOW(),

        )";
            }
            if ($resultado) {
                echo $insertar;
                mysqli_query($con, $insertar);
                echo "<script> alert('El Docente fue creado en el Sistema')</script>";
            } else {
                die("Ocurrio un error, verifique nuevamente: " . mysqli_error($con));
            }
        }
    }
    function modificar()
    {

    }

    function eliminar()
    {
        $conet = new Conexion();
        $con = $conet->conectando();
        $consulta = "SELECT * FROM docentes WHERE numeroDocentes = '$this->numeroDocentes')";
        $resultado = mysqli_query($con, $consulta);
        if (mysqli_fetch_array($resultado)) {
            echo "<script> alert('El Docente ya fue eliminado con anterioridad en el Sistema')</script>";
        }
        if ($resultado) {
            $eliminar ="DELETE FROM docentes where numeroDocentes like $this->numeroDocentes)";
            if ($resultado) {
                echo $eliminar;
                mysqli_query($con, $eliminar);
                echo "<script> alert('El Docente fue eliminado en el Sistema')</script>";
            } else {
                die("Ocurrio un error, verifique nuevamente:" . mysqli_error($con));
            }
        }
    }
    

    function limpiar()
    {

    }
}
