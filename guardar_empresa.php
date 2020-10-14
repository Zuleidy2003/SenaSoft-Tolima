<?php
$nombre_empresa=$_POST['nombre_empresa'];
$email_empresa=$_POST['email_empresa'];
$nit_empresa=$_POST['nit_empresa'];
$tipo_empresa=$_POST['tipo_empresa'];
$pais_empresa=$_POST['pais_empresa'];
$usuario_empresa=$_POST['usuario_empresa'];
$contrasena_empresa=$_POST['contrasena_empresa'];
$c_contrasenaempresa=$_POST['c_contrasenaempresa'];
$id_empresa= 0 ;
$id_bodega= 102020 ;

if ($contrasena_empresa<=$c_contrasenaempresa) {

    // se esta incriptando la contraseña
    $contrasena = password_hash($contrasena_empresa, PASSWORD_ARGON2ID);

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=senasoft",'root','');
    } catch (PDOException $error) {
        echo "Tenemos un Error" . $error->getMessage();
    }


    $sql = "INSERT INTO empresa (Id_Empresa,Nombre,Usuario_Empresa,Contrasena_Empresa,Email,Nit_Empresa,Pais,Tipo_Empresa,Id_Bodega) VALUES (?,?,?,?,?,?,?,?,?)";


    $guardar = $conexion->prepare($sql);
    $guardar->bindParam(1,$id_empresa);
    $guardar->bindParam(2,$nombre_empresa);
    $guardar->bindParam(3,$usuario_empresa);
    $guardar->bindParam(4,$contrasena);
    $guardar->bindParam(5,$email_empresa);
    $guardar->bindParam(6,$nit_empresa);
    $guardar->bindParam(7,$pais_empresa);
    $guardar->bindParam(8,$tipo_empresa);
    $guardar->bindParam(9,$id_bodega);
    $guardar->execute();

    header("location: mostrarempresa.php");
}else{
    print("
    $nombre_empresa <br>
    $email_empresa <br>
    $nit_empresa <br>
    $tipo_empresa <br>
    $pais_empresa <br>
    $usuario_empresa <br>
    $contrasena_empresa <br>
    $c_contrasenaempresa <br>
    $id_empresa <br>
    $id_bodega <br>
    ");
}
?>