<?php
include('cambio_mod.php');
$obj = new cambio();

if($_POST){

    $obj->correoRe = $_POST['correoRe'];
    $obj->contraseña_alum = $_POST['contraseña_alum'];
    $obj->contrasena1 = $_POST['contrasena1'];
}

if(isset($_POST['modificaCo'])){
    $obj->modificarCo();
}


?>
