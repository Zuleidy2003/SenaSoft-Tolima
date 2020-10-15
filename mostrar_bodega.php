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

$sql = "SELECT * FROM bodegas";

$guardar = $conexion->prepare($sql);
$guardar->execute();

$objetobodega = $guardar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
    <h4>Registro de Bodegas</h4>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Telefono</th>
                <th>Numero de Empresa</th>
                <th>Opciones</th>
            </tr>
        </thead>	
        <tbody>
        <?php foreach($objetobodega as $bodega) { ?>
            <tr>
                <th><?php echo $bodega->Id_Bodega; ?></th>
                <th><?php echo $bodega->Nombre; ?></th>
                <th><?php echo $bodega->Celular; ?></th>
                <th><?php echo $bodega->Telefono; ?></th>
                <th><?php echo $bodega->Id_Empresa; ?></th>
                <th>
                <a href="factualizar_bodega.php?id=<?php echo $bodega->Id_Bodega; ?>"> <i class="material-icons">edit</i> </a>
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