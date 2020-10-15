<?php

$id = $_POST['id'];
$nombre_empresa=$_POST['nombre_empresa'];
$usuario_empresa=$_POST['usuario_empresa'];
$contrasena_empresa=$_POST['contrasena_empresa'];
$email_empresa=$_POST['email_empresa'];
$nit_empresa=$_POST['nit_empresa'];
$pais=$_POST['pais'];
$tipo_empresa=$_POST['tipo_empresa'];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
} catch (PDOException $error) {
    echo "Tenemos un Error" . $error->getMessage();
}

$sql = "UPDATE empresa SET Nombre=:ishi,Usuario_Empresa=:ni,Contrasena_Empresa=:san,Email=:yon,Nit_Empresa=:ko,Pais=:roku,Tipo_Empresa=:nana WHERE Id_Empresa='$id'";	

$guardar = $conexion->prepare($sql);
$guardar->bindParam(':ishi',$nombre_empresa);
$guardar->bindParam(':ni',$usuario_empresa);
$guardar->bindParam(':san',$contrasena_empresa);
$guardar->bindParam(':yon',$email_empresa);
$guardar->bindParam(':ko',$nit_empresa);
$guardar->bindParam(':roku',$pais);
$guardar->bindParam(':nana',$tipo_empresa);
$guardar->execute();

header("location: mostrar_empresa.php");



?>