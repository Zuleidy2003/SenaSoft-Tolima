<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../senasoft/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>loginempresa</title>
</head>
<body>
<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
} catch (PDOException $error) {
    echo("Tenemos un error") . $error->Message();
}

$sql = "SELECT * FROM producto";

$guardar = $conexion->prepare($sql);
$guardar->execute();

$objetoproducto = $guardar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
    <h4>Registro de productos</h4>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Longitud</th>
                <th>Cantidad</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Impuesto</th>
                <th>clave del proveedor</th>
                <th>Opciones</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($objetoproducto as $producto) { ?>
            <tr>
                <th><?php echo $producto->Id_Producto; ?></th>
                <th><?php echo $producto->Nombre; ?></th>
                <th><?php echo $producto->Marca; ?></th>
                <th><?php echo $producto->Longitud; ?></th>
                <th><?php echo $producto->Cantidad_Existencia; ?></th>
                <th><?php echo $producto->Precio_Compra; ?></th>
                <th><?php echo $producto->Precio_Venta; ?></th>
                <th><?php echo $producto->Impuesto; ?></th>
                <th><?php echo $producto->Id_Proveedor; ?></th>
                <th>
                    <a href=""><i class="material-icons">edit</i></a>
                    <a href=""><i class="material-icons">delete</i></a>
                </th>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <table>
            <tr>
                <th><a href="registrar_producto.php">CREAR NUEVO PRODUCTO</a></th>
            </tr>
    </table>
<br><br>

<script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>