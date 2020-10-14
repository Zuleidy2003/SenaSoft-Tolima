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
        <h2>Registrar sucursal</h2>
    <div class="row">
    <form action="" METHOD="POST">

        <div class="input-field col s6">
            <label for="">Sede</label>
            <input type="text" name="nombre_empresa" required>
        </div>

        <div class="input-field col s6">
            <label for="">Direccion</label>
            <input type="text" name="gmail_empresa" required>
        </div>

        <div class="input-field col s6">
            <label for="">Celular</label>
            <input type="text" name="nit_empresa" required>
        </div>

        <div class="input-field col s6">
            <label for="">Telefono</label>
            <input type="text" name="tipo_empresa" required>
        </div>

            <button class="waves-effect waves-light btn-small" type="submit" name="Registrar" style="margin-left: 40%;">Registrar<i class="material-icons right">done_all</i></button>
    </form>
    </div>
        <script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>