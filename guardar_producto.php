<?php
$nombre_producto=$_POST['nombre_producto'];
$marca_producto=$_POST['marca_producto'];
$tamano_producto=$_POST['tamano_producto'];
$cantidad_producto=$_POST['cantidad_producto'];
$precio_compra=$_POST['precio_compra'];
$precio_venta=$_POST['precio_venta'];
$impuesto_producto=$_POST['impuesto_producto'];
$id_producto=0;
$id_proveedor=1;

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
    } catch (PDOException $error) {
        echo "Tenemos un Error" . $error->getMessage();
    }


    $sql = "INSERT INTO producto (Id_Producto,Nombre,Marca,Longitud,Cantidad_Existencia,Precio_Compra,Precio_Venta,Impuesto,Id_Proveedor) VALUES (?,?,?,?,?,?,?,?,?)";

    $guardar = $conexion->prepare($sql);
    $guardar->bindParam(1,$id_producto);
    $guardar->bindParam(2,$nombre_producto);
    $guardar->bindParam(3,$marca_producto);
    $guardar->bindParam(4,$tamano_producto);
    $guardar->bindParam(5,$cantidad_producto);
    $guardar->bindParam(6,$precio_compra);
    $guardar->bindParam(7,$precio_venta);
    $guardar->bindParam(8,$impuesto_producto);
    $guardar->bindParam(9,$id_proveedor);
    $guardar->execute();

    header("location: productos.php");
?>