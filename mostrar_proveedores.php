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

$sql = "SELECT * FROM proveedor";

$guardar = $conexion->prepare($sql);
$guardar->execute();

$objetoproveedor = $guardar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
    <h4>Registro de Proveedor</h4>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Telefono</th>
                <th>Identificacion</th>
                <th>Opciones</th>
            </tr>
        </thead>	
        <tbody>
        <?php foreach($objetoproveedor as $proveedor) { ?>
            <tr>
                <th><?php echo $proveedor->Id_Proveedor; ?></th>
                <th><?php echo $proveedor->Nombre; ?></th>
                <th><?php echo $proveedor->Celular; ?></th>
                <th><?php echo $proveedor->Telefono; ?></th>
                <th><?php echo $proveedor->Documento; ?></th>
                <th>
                    <a href=""><i class="material-icons">edit</i></a>
                    <a href=""><i class="material-icons">delete</i></a>
                </th>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<br><br>

<script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>