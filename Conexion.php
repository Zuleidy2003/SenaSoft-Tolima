<?php

class Conexion{
    public $conexion;

    public function ConectarBD()
    {
        try{
            $this->conexion = new PDO("mysql:host=localhost; dbname=senasoftt", 'root', '');
        }catch (PDOException $error){
            echo "Tenemos un error" . $error->getMessage();
        }
    }
}

?>