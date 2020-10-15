<?php

$id = $_GET['id'];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
} catch (PDOException $error) {
    echo "Tenemos un Error" . $error->getMessage();
}

$sql = "SELECT * FROM bodegas WHERE Id_Bodega='$id' ";
$mostrarbodega = $conexion-> prepare($sql);
$mostrarbodega->execute();

$objetobodega = $mostrarbodega->fetchALL(PDO::FETCH_OBJ);



foreach($objetobodega as $bodega) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../senasoft/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Crud de usuario</title>
</head>
<body>
    <div class="container">
        <h1>Formulario de actualizacion de Bodega</h1>
    <form action="actualizar_bodega.php" method="POST">
        <div class="row">
                <input type="hidden" name="id" value="<?php echo $bodega->Id_Bodega; ?>">
            <div class="input-field col s6">
                <label for="">Nombre</label>
                <input type="text" name="nombre_bodega" value="<?php echo $bodega->Nombre; ?>">
            </div>
            <div class="input-field col s6">
                <label for="">Celular</label>
                <input type="number" name="celular_bodega" value="<?php echo $bodega->Celular; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Telefono</label>
                <input type="number" name="telefono_bodega" value="<?php echo $bodega->Telefono; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Numero de Empresa</label>
                <input type="number" name="id_empresa" value="<?php echo $bodega->Id_Empresa; ?>">
            </div>
        </div>
<button style="margin-left: 40%;" type="submit" class="waves-effect waves-light btn">Guardar<i class="material-icons left">cloud</i></button>
    </form>
    <script src="../senasoft/js/materialize.js"></script>
    </div>
</body>
</html>