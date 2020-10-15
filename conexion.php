<?php

    class Conexion{

        public $conexion;

        public function ConectarlaBD(){

            try{
                $this->conexion = new PDO("mysql:host=localhost;dbname=senasoftt",'root','');
            } catch(PDOException $error){
                echo"Tenemos un ERROR" . $error->getMessage();
            }
        }
    }

?>