<?php include '../MENU/header.php';
if(empty($_SESSION['nombre'])){
    header("location: LoginEmpleado.php");
}

include 'Conexion.php';
$c = new Conexion();
$c->ConectarBD();

$sql = "SELECT * FROM empleado";
$mostrar = $c->conexion->prepare($sql);
$mostrar->execute();

$objetoEmpleado = $mostrar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container4">
    <h2>LISTADO DE EMPLEADOS</h2>

    <table class="centered">

        <thead>
            <tr>
                <th>Nombre:</th>
                <th>Apellidos:</th>
                <th>Cargo:</th>
                <th>Email:</th>
                <th>Edad:</th>
                <th>Direccion:</th>
                <th>Ciudad:</th>
                <th>Cedula:</th>
                <th>Celular:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetoEmpleado as $Empleado) { ?>
                <tr>
                    <td><?php echo $Empleado->Nombre; ?></td>
                    <td><?php echo $Empleado->Apellidos; ?></td>
                    <td><?php echo $Empleado->Cargo; ?></td>
                    <td><?php echo $Empleado->Email; ?></td>
                    <td><?php echo $Empleado->Edad; ?></td>
                    <td><?php echo $Empleado->Direccion; ?></td>
                    <td><?php echo $Empleado->Ciudad; ?></td>
                    <td><?php echo $Empleado->Documento; ?></td>
                    <td><?php echo $Empleado->Celular; ?></td>

                </tr>
            <?php } ?>
        </tbody>

    </table>

</div>

<?php
include '../MENU/footer.php'
?>