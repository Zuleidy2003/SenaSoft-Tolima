<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$cargo = $_POST['Cargo'];
$email = $_POST['Email'];
$edad = $_POST['Edad'];
$direccion = $_POST['Direccion'];
$ciudad = $_POST['Ciudad'];
$cedula = $_POST['Cedula'];
$celular = $_POST['Celular'];
$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contrasena'];
$contrasenanueva = password_hash($contrasena, PASSWORD_ARGON2ID);

include '../PHP/Conexion.php';
$conexion = new Conexion();
$conexion->ConectarBD();

$sql = "INSERT INTO empleado (Nombre, Apellidos, Cargo, Email, Edad, Direccion, Ciudad, Documento, Celular, Usuario_Empleado, Contrasena_Empleado)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$guardar = $conexion->conexion->prepare($sql);
$guardar->bindParam(1, $nombre);
$guardar->bindParam(2, $apellido);
$guardar->bindParam(3, $cargo);
$guardar->bindParam(4, $email);
$guardar->bindParam(5, $edad);
$guardar->bindParam(6, $direccion);
$guardar->bindParam(7, $ciudad);
$guardar->bindParam(8, $cedula);
$guardar->bindParam(9, $celular);
$guardar->bindParam(10, $usuario);
$guardar->bindParam(11, $contrasenanueva);
$guardar->execute();

header("location: ../PHP/MostrarEmpleado.php");
?>