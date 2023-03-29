<?php


class cambio
{

    public $correoRe;
    public $contraseña_alum;
    public $contrasena1;



    function modificarCo()
    {

        $obj = new conexion();
        $c = $obj->conectando();
        $query = "SELECT * FROM alumno WHERE correo = '$this->correoRe'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            if ($this->contraseña_alum == $this->contrasena1) {
                $contra_fuerte = password_hash($this->contraseña_alum, PASSWORD_DEFAULT);
                $update = "update alumno set
                                                                                        contraseña_alum='$contra_fuerte'
                                                                                        where correo='$this->correoRe'

                                                ";
                mysqli_query($c, $update);
                echo "<script> alert('La contraseña fue modificada en el sistema'); window.location.href='login_alumno.php';</script>";
            } else {
                echo "<script> alert('Las contraseñas no son iguales'); window.location.href='formulario_can_c.php';</script>";
            }
        } else {
            echo "<script> alert('El correo actual no coincide con la base de datos'); window.location.href='cambiar_contraseña.php';</script>";
        }
    }
}
