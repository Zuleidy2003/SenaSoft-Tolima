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
        <h2>Registrar Empresa</h2>
    <div class="row">
    <form action="guardar_empresa.php" method="POST">

        <div class="input-field col s6">
            <label for="">Nombre De La Empresa</label>
            <input type="text" name="nombre_empresa" required>
        </div>

        <div class="input-field col s6">
            <label for="">Email De la Empresa</label>
            <input type="text" name="email_empresa" required>
        </div>

        <div class="input-field col s4">
            <label for="">Nit De La Empresa</label>
            <input type="text" name="nit_empresa" required>
        </div>

        <div class="input-field col s4">
            <label for="">Tipo De Empresa</label>
            <input type="text" name="tipo_empresa" required>
        </div>

        <div class="input-field col s4">
            <label for="">Pais</label>
            <input type="text" name="pais_empresa" required>
        </div>
<br><br>
        <div class="input-field col s7">
            <label for="" >Cree un usuario</label>
            <input type="text" name="usuario_empresa" required>
        </div>

        <div class="input-field col s7">
            <label for="">Cree una contraseña</label>
            <input type="password" name="contrasena_empresa" required>
        </div>


            <button class="waves-effect waves-light btn-small" type="submit" name="Registrar" style="margin-left: 40%;">Registrar<i class="material-icons right">done_all</i></button>
    </form>
    </div>
        <script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>