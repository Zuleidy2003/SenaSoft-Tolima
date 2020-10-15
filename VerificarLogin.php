<?php session_start();

    $usuario = $_POST['Usuario'];
    $contrasena = $_POST['Contrasena'];

    include '../PHP/Conexion.php';
    $c = new Conexion();
    $c->ConectarBD();

    $sql = "SELECT * FROM empleado WHERE Usuario_Empleado = '$usuario'";

$mostrar = $c->conexion->prepare($sql);
$mostrar->execute();

$objeto = $mostrar->fetchAll(PDO::FETCH_OBJ);

foreach($objeto as $empleado){

}
    if($objeto==null){
        echo "No existe el empleado";
    }
    elseif (password_verify($contrasena, $empleado->Contrasena_Empleado)){
        $_SESSION['nombre'] = $empleado->Nombre;
            $_SESSION['usuario'] = $empleado->Usuario_Empleado;
            header("location: ../PHP/MostrarEmpleado.php");
    }
    else{
        echo "la contraseña es incorrecta, por favor intente de nuevo";
    }






    /*else{
        if (password_verify($contrasena, $empleado->Contrasena_Empleado)){
            $_SESSION['nombre'] = $empleado->Nombre;
            $_SESSION['usuario'] = $empleado->Usuario_Empleado;

            header("location: ../PHP/MostrarEmpleado.php");
        }else{
            echo "la contraseña es incorrecta, por favor intente de nuevo";
        }
    }*/


?>