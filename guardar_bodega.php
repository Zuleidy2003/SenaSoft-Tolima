<?php

$nombre_bodega=$_POST['nombre_bodega'];
$celular_bodega=$_POST['celular_bodega'];
$telefono_bodega=$_POST['telefono_bodega'];
$id_producto=$_POST['id_producto'];
$id_bodega=0;


    try {
        $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
    } catch (PDOException $error) {
        echo "Tenemos un Error" . $error->getMessage();
    }


    $sql = "INSERT INTO bodegas (Id_Bodega,Nombre,Celular,Telefono,Id_Producto) VALUES (?,?,?,?,?)";
	 

    $guardar = $conexion->prepare($sql);
    $guardar->bindParam(1,$id_bodega);
    $guardar->bindParam(2,$nombre_bodega);
    $guardar->bindParam(3,$celular_bodega);
    $guardar->bindParam(4,$telefono_bodega);
    $guardar->bindParam(5,$id_producto);
    $guardar->execute();

    header("location: mostrar_bodega.php");
?>