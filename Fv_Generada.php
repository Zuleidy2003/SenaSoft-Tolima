<?php

    
include 'conexion.php';
$c = new Conexion();
$c->ConectarlaBD();


$sqlventa ="SELECT Id_Venta, Fecha FROM Factura_Venta";
$sqlcliente = "SELECT * FROM Cliente";
$sqlempleado = "SELECT Nombre,Id_Empleado FROM Empleado";
$sqltienda = "SELECT Nombre, Id_Tienda FROM Tienda";
$sql = "SELECT Cantidad, Impuesto, Valor_Uni, Valor_Tot,Pago, Total FROM Detalle_Fv";
$sqlt = $sql.$sqlcliente.$sqlempleado.$sqltienda.$sqlventa;

$sql = "SELECT Factura_Venta.Id_FacturaV, Fractura_Venta.Fecha,Cliente.Nombre, Cliente.Apellidos, Cliente.Id_Cliente,Cliente.Direccion,Cliente.Documento,Cliente.Celular, Empleado.Nombre,Empleado.Id_Empleado,Tienda.Nombre,Tienda.Id_Tienda,Detalle_Fv.Cantidad,Detalle_Fv.Impuesto,Detalle_Fv.Valor_Uni,Detalle_Fv.Valor_Tot,Detalle_Fv.Pago,Detalle_Fv.Total FROM Fractura_Venta inner join Cliente inner join Empleado inner join Tienda inner join Detalle_Fv on  "

// select articulos.nombre,articulos.precio,fabricantes.nombre from articulos inner join fabricantes on articulos.clave_fabricante = fabricantes.clave_fabricante where fabricantes.nombre = 'Lexar' or fabricantes.nombre = 'Kingston' order by precio desc;

// $c->conexion->prepare($sqlt);
// $c->execute();

//$objetofactura = $mostrar->fetchAll(PDO::FETCH_OBJ);
?>
    <div class="container">
        <h1>FACTURA</h1>

        <table class="centered">
            <thead>
                <tr>
                    <th>Id_Facutrav</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Id_Cliente</th>
                    <th>Direccion</th>
                    <th>Documento</th>
                    <th>Celular</th>
                    <th>Nombre</th>
                    <th>Id_Empleado</th>
                    <th>Nombre</th>
                    <th>Id_Tienda</th>
                    <th>Cantidad</th>
                    <th>Impuesto</th>
                    <th>Valor_Uni</th>
                    <th>Valor_Tot</th>
                    <th>Pago</th>
                    <th>Total</th>
                    <th>Id_Tienda</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($objetofactura as $factura){ ?>
                <tr>
                    <td><?php echo $factura->Id_Facturav; ?></td>
                    <td><?php echo $factura->Fecha; ?></td>
                    <td><?php echo $factura->Nombre; ?></td>
                    <td><?php echo $factura->Apellidos; ?></td>
                    <td><?php echo $factura->Id_Cliente; ?></td>
                    <td><?php echo $factura->Direccion; ?></td>
                    <td><?php echo $factura->Documento; ?></td>
                    <td><?php echo $factura->Celular; ?></td>
                    <td><?php echo $factura->Nombre; ?></td>
                    <td><?php echo $factura->Id_Empleado; ?></td>
                    <td><?php echo $factura->Nombre; ?></td>
                    <td><?php echo $factura->Id_Tienda; ?></td>
                    <td><?php echo $factura->Cantidad; ?></td>
                    <td><?php echo $factura->Impuesto; ?></td>
                    <td><?php echo $factura->Valor_Uni; ?></td>
                    <td><?php echo $factura->Valor_Tot; ?></td>
                    <td><?php echo $factura->Pago; ?></td>
                    <td><?php echo $factura->Total; ?></td>
                    <!--<td></?php echo $factura->Id_Tienda; ?></td>-->
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<script src="js/materialize.js"></script>

