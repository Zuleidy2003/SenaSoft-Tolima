<?php include '../MENU/headerEmpresa.php';
if(empty($_SESSION['nombre'])){
    header("location: LoginEmpresa.php");
}

include 'Conexion.php';
$c = new Conexion();
$c->ConectarBD();

$sql = "SELECT * FROM empresa";
$mostrar = $c->conexion->prepare($sql);
$mostrar->execute();

$objetoEmpresa = $mostrar->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container4">
    <h2>LISTADO DE EMPRESAS</h2>

    <table class="centered">

        <thead>
            <tr>
                <th>Nombre:</th>
                <th>Email:</th>
                <th>Nit:</th>
                <th>Pais:</th>
                <th>Tipo de empresa:</th>
                <th>Id bodega:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetoEmpresa as $empresa) { ?>
                <tr>
                    <td><?php echo $empresa->Nombre; ?></td>
                    <td><?php echo $empresa->Email; ?></td>
                    <td><?php echo $empresa->Nit_Empresa; ?></td>
                    <td><?php echo $empresa->Pais; ?></td>
                    <td><?php echo $empresa->Tipo_Empresa; ?></td>
                    <td><?php echo $empresa->Id_bodega; ?></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

</div>

<?php
include '../MENU/footer.php'
?>