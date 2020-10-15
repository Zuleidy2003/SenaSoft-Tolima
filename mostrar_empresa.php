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

$sql = "SELECT * FROM empresa";

$guardar = $conexion->prepare($sql);
$guardar->execute();

$objetoempresa = $guardar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
    <h4>Registro de Empresas</h4>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Nit</th>
                <th>Pais</th>
                <th>Tipo de empresa</th>
                <th>Bodega</th>
                <th>Opciones</th>
            </tr>
        </thead>	
        <tbody>
        <?php foreach($objetoempresa as $empresa) { ?>
            <tr>
                <th><?php echo $empresa->Id_Empresa; ?></th>
                <th><?php echo $empresa->Nombre; ?></th>
                <th><?php echo $empresa->Usuario_Empresa; ?></th>
                <th><?php echo $empresa->Email; ?></th>
                <th><?php echo $empresa->Nit_Empresa; ?></th>
                <th><?php echo $empresa->Pais; ?></th>
                <th><?php echo $empresa->Tipo_Empresa; ?></th>
                <th><?php echo $empresa->Id_Bodega; ?></th>
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