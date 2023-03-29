<?php


class cambio
{

    public $correo_doc;
    public $contraseña_doc;
    public $contrasena1;



    function modificarCo()
    {

        $obj = new conexion();
        $c = $obj->conectando();
        $query = "SELECT * FROM docente WHERE correo_doc = '$this->correo_doc'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            if ($this->contraseña_doc == $this->contrasena1) {
                $contra_fuerte = password_hash($this->contraseña_doc, PASSWORD_DEFAULT);
                $update = "update docente set
                                                                                        contraseña_doc='$contra_fuerte'
                                                                                        where correo_doc='$this->correo_doc'

                                                ";
                mysqli_query($c, $update);
                echo "<script> alert('La contraseña fue modificada en el sistema'); window.location.href='login_docente.php';</script>";
            } else {
                echo "<script> alert('Las contraseñas no son iguales'); window.location.href='formulario_can_doc_c.php';</script>";
            }
        } else {
            echo "<script> alert('El correo actual no coincide con la base de datos'); window.location.href='cambiar_contraseña_doc.php';</script>";
        }
    }
}
