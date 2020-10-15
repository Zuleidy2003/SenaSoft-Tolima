<?php
$nombre_empresa=$_POST['nombre_empresa'];
$email_empresa=$_POST['email_empresa'];
$nit_empresa=$_POST['nit_empresa'];
$tipo_empresa=$_POST['tipo_empresa'];
$pais_empresa=$_POST['pais_empresa'];
$usuario_empresa=$_POST['usuario_empresa'];
$contrasena_empresa=$_POST['contrasena_empresa'];
$id_empresa= 0 ;

    // se esta incriptando la contraseña
    $contrasena = password_hash($contrasena_empresa, PASSWORD_ARGON2ID);

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
    } catch (PDOException $error) {
        echo "Tenemos un Error" . $error->getMessage();
    }


    $sql = "INSERT INTO empresa (Id_Empresa,Nombre,Usuario_Empresa,Contrasena_Empresa,Email,Nit_Empresa,Pais,Tipo_Empresa) VALUES (?,?,?,?,?,?,?,?)";


    $guardar = $conexion->prepare($sql);
    $guardar->bindParam(1,$id_empresa);
    $guardar->bindParam(2,$nombre_empresa);
    $guardar->bindParam(3,$usuario_empresa);
    $guardar->bindParam(4,$contrasena);
    $guardar->bindParam(5,$email_empresa);
    $guardar->bindParam(6,$nit_empresa);
    $guardar->bindParam(7,$pais_empresa);
    $guardar->bindParam(8,$tipo_empresa);
    $guardar->execute();

    header("location: login_empresa.php");
?>