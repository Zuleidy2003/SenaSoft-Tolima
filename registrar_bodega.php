<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../senasoft/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>registrarempresa</title>
</head>
<body>
<div class="container">
        <h2>Registre su bodega</h2>
    <div class="row">
    <form action="guardar_bodega.php" method="POST">

        <div class="input-field col s6">
            <label for="">Nombre</label>
            <input type="text" name="nombre_bodega" required>
        </div>

        <div class="input-field col s6">
            <label for="">Celular</label>
            <input type="number" name="celular_bodega" required>
        </div>

        <div class="input-field col s6">
            <label for="">Telefono</label>
            <input type="number" name="telefono_bodega" required>
        </div>

        <div class="input-field col s6">
            <label for="">Clave de Producto</label>
            <input type="number" name="id_producto" required>
            <a href="productos.php">Listado de productos</a>
        </div>

            <button class="waves-effect waves-light btn-small" type="submit" name="Guardar" style="margin-left: 40%;">Guardar<i class="material-icons right">done_all</i></button>
    </form>
    </div>
        <script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>