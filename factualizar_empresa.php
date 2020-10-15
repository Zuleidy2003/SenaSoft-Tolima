<?php

$id = $_GET['id'];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
} catch (PDOException $error) {
    echo "Tenemos un Error" . $error->getMessage();
}

$sql = "SELECT * FROM empresa WHERE Id_Empresa='$id' ";
$mostrarempresa = $conexion-> prepare($sql);
$mostrarempresa->execute();

$objetoempresa = $mostrarempresa->fetchALL(PDO::FETCH_OBJ);



foreach($objetoempresa as $empresa) {

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
        <h1>Formulario de actualizacion de empresa</h1>
    <form action="actualizar_empresa.php" method="POST">
        <div class="row">
                <input type="hidden" name="id" value="<?php echo $empresa->Id_Empresa; ?>">
            <div class="input-field col s6">
                <label for="">Nombre</label>
                <input type="text" name="nombre_empresa" value="<?php echo $empresa->Nombre; ?>">
            </div>
            <div class="input-field col s6">
                <label for="">Usuario</label>
                <input type="text" name="usuario_empresa" value="<?php echo $empresa->Usuario_Empresa; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Contraseña</label>
                <input type="text" name="contrasena_empresa" value="<?php echo $empresa->Contrasena_Empresa; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Email</label>
                <input type="text" name="email_empresa" value="<?php echo $empresa->Email; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Nit</label>
                <input type="text" name="nit_empresa" value="<?php echo $empresa->Nit_Empresa; ?>">
            </div>
            <div class="input-field col s4">
                <label for="">Pais</label>
                <input type="text" name="pais" value="<?php echo $empresa->Pais; ?>"> 
            </div>
            <div class="input-field col s4">
                <label for="">Tipo Empresa</label>
                <input type="text" name="tipo_empresa" value="<?php echo $empresa->Tipo_Empresa; ?>">
            </div>
        </div>
<button style="margin-left: 40%;" type="submit" class="waves-effect waves-light btn">Guardar<i class="material-icons left">cloud</i></button>
    </form>
    <script src="../senasoft/js/materialize.js"></script>
    </div>
</body>
</html>