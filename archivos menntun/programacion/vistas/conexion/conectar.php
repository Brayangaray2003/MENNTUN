<?php
class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db  = "menntun1";

    public function Conectando(){
        $con= mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        return $con;
    }

}
$obj = new Conexion();
if($obj->conectando()){

}else{

}
?>