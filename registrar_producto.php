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
        <h2>Formulario de insercion de un nuevo producto</h2>
    <div class="row">
    <form action="guardar_producto.php" METHOD="POST">

        <div class="input-field col s6">
            <label for="">Nombre</label>
            <input type="text" name="nombre_producto" required>
        </div>

        <div class="input-field col s6">
            <label for="">Marca</label>
            <input type="text" name="marca_producto" required>
        </div>

        <div class="input-field col s6">
            <label for="">Tamaño</label>
            <input type="text" name="tamano_producto" required>
        </div>

        <div class="input-field col s6">
            <label for="">Cantidad</label>
            <input type="text" name="cantidad_producto" required>
        </div>

        <div class="input-field col s6">
            <label for="">Precio Compra</label>
            <input type="text" name="precio_compra" required>
        </div>

        <div class="input-field col s6">
            <label for="">Precio Venta</label>
            <input type="text" name="precio_venta" required>
        </div>
        
        <div class="input-field col s6">
            <label for="">Impuesto</label>
            <input type="text" name="impuesto_producto" required>
        </div>

            <button class="waves-effect waves-light btn-small" type="submit" name="Guardar" style="margin-left: 40%;">Guardar<i class="material-icons right">done_all</i></button>
    </form>
    </div>
        <script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>