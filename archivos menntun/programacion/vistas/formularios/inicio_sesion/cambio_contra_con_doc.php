<?php
include('cambio_mod_doc.php');
$obj = new cambio();

if($_POST){

    $obj->correo_doc = $_POST['correo_doc'];
    $obj->contraseña_doc = $_POST['contraseña_doc'];
    $obj->contrasena1 = $_POST['contrasena1'];
}

if(isset($_POST['modificaCo'])){
    $obj->modificarCo();
}


?>
