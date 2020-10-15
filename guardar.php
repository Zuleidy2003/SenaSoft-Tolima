<?php
    $id_v = $_POST['Id_FacturaV'];
    $fecha_v = $_POST['Fecha'];
    $clinombre = $_POST['Nombre'];
    $cliapellidos = $_POST['Apellidos'];
    $id_c = $_POST['Id_Cliente'];
    $direccion = $_POST['Direccion'];
    $documento = $_POST['Documento'];
    $celular = $_POST['Celular'];
    $vendedor = $_POST['Nombre'];
    $id_e = $_POST['Id_Empleado'];
    $tienda = $_POST['Nombre'];
    $id_t = $_POST['Id_Tienda'];
    $id_p = $_POST['Id_Producto'];
    $pronombre = $_POST['Nombre'];
    $cantidad = $_POST['Cantidad'];
    $impuesto = $_POST['Impuesto'];
    $v_u = $_POST['Valor_Uni'];
    $v_t = $_POST['Valor_Tot'];
    $pago = $_POST['Pago'];
    $total = $_POST['Total'];

    try {
        $conexion = new PDO("mysql:host=localhost; dbname=senasoftt" , 'root', '');
    } catch (PDOException $error) {
        echo "Tenemos un error" . $error->getMessage();
    }

    // //$sqlventa = "INSERT INTO Factura_Venta(Id_FacturaV, Fecha) VALUES('$id_v','$fecha_v')";
    // $sqlcliente = "INSERT INTO Cliente(Nombre, Apellidos, Id_Cliente,Direccion,Documento,Celular) VALUES ('$clinombre','$cliapellidos','$id_c','$direccion','$documento','$celular')";
    // $sqlempleado = "INSERT INTO Empleado(Nombre,Id_Empleado) VALUES ('$vendedor','$id_e')";
    // $sqltienda = "INSERT INTO Tienda(Nombre,Id_Tienda) VALUES ('$tienda','$id_t')";
    // $sql = "INSERT INTO Detalle_Fv (Cantidad, Impuesto, Valor_Uni, Valor_Tot,Pago,Total) VALUES ('$cantidad','$impuesto','$v_u','$v_t','$pago','$total";//

    $sql = "INSERT INTO Factura_Venta.Id_FacturaV,Factura_Venta.Fecha, Cliente.Nombre, Cliente.Apellidos, Cliente.Id_Cliente,Cliente.Direccion,Cliente.Documento,Cliente.Celular, Empleado.Nombre,Empleado.Id_Empleado,Tienda.Nombre,Tienda.Id_Tienda,Detalle_Fv.Cantidad,Detalle_Fv.Impuesto,Detalle_Fv.Valor_Uni,Detalle_Fv.Valor_Tot,Detalle_Fv.Pago,Detalle_Fv.Total VALUES ('$id_v','$fecha_v','$clinombre','$cliapellidos','$id_c','$direccion','$documento','$celular','$vendedor','$id_e','$tienda','$id_t','$cantidad','$impuesto','$v_u','$v_t','$pago','$total) FROM "
    // select articulos.nombre,articulos.precio,fabricantes.nombre from articulos inner join fabricantes on articulos.clave_fabricante = fabricantes.clave_fabricante where fabricantes.nombre = 'Lexar' or fabricantes.nombre = 'Kingston' order by precio desc;

    $guardar = $conexion -> prepare($sql);
    $guardar -> execute();

    //($sqlventa),($sqlcliente),($sqlempleado),($sqltienda),
    header("location: Fv_Generada.php")
?>
