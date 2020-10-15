<?php

$id = $_POST['id'];
$nombre_bodega=$_POST['nombre_bodega'];
$celular_bodega=$_POST['celular_bodega'];
$telefono_bodega=$_POST['telefono_bodega'];
$id_empresa=$_POST['id_empresa'];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
} catch (PDOException $error) {
    echo "Tenemos un Error" . $error->getMessage();
}

$sql = "UPDATE bodegas SET Nombre=:ishi,Celular=:ni,Telefono=:san,Id_Empresa=:yon WHERE Id_Bodega='$id'";	 

$guardar = $conexion->prepare($sql);
$guardar->bindParam(':ishi',$nombre_bodega);
$guardar->bindParam(':ni',$celular_bodega);
$guardar->bindParam(':san',$telefono_bodega);
$guardar->bindParam(':yon',$id_empresa);
$guardar->execute();

header("location: mostrar_bodega.php");



?>