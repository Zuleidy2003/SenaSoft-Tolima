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
<div class="container">
        <h2>Iniciar Sesion</h2>
    <div class="row">
    <form action="" METHOD="POST">
        <div class="input-field col s7">
            <label for="" >Digite su usuario</label>
            <input type="text" name="usuario_empresa" required>
        </div>

        <div class="input-field col s7">
            <label for="">Digite su contraseña</label>
            <input type="text" name="contrasena-empresa" required>
        </div>

            <button class="waves-effect waves-light btn-small" type="submit" name="Ingresar" style="margin-left: 40%;">Registrar<i class="material-icons right">done_all</i></button>
    </form>
    </div>
    <br><br>
    <hr color="pink" size=2 width="1000">
    <center>
    <h6>Si quieres Crear una cuenta <br> has <a href="registrar_empresa.php">CLICK AQUÍ</a></h6>
    </center>
        <script src="../senasoft/js/materialize.js"></script>
</div>
</body>
</html>