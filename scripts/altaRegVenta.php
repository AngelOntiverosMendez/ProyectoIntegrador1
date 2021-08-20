<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        include 'conexion.php';
        $db = new Database();
        $db->conectarDB();
        session_start();

        extract($_POST);
        $date= date("Y") . "-" . date("m") . "-" . date("d");
        $cadena = "INSERT INTO orden_venta(Fecha, Empleado,Cliente,Paqueteria) VALUES ('$date', '1', '".$_SESSION["id"]."','$paqueteria')";
        $db->ejecutar($cadena);

        $consulta = "SELECT * from orden_venta WHERE orden_venta.Cliente = '".$_SESSION["id"]."'";
        $orden = $db->seleccionar($consulta);
        $registro = 0;
        foreach($orden as $value)
        {
            $value->Reg;
        }
        $registro = $value->Reg;

        $consulta1 = "SELECT carrito.Cliente,carrito.Producto,carrito.Cantidad,carrito.folio,productos.Precio from carrito inner join productos on 
        carrito.Producto=productos.ProductoID WHERE carrito.Cliente = '".$_SESSION["id"]."'";
        $carrito = $db->seleccionar($consulta1);
        foreach($carrito as $value1)
        {
            $precio = ($value1->Cantidad)*($value1->Precio);
            $cadena1="INSERT INTO detalle_orden_venta(Orden_Venta,Producto,Cantidad,Descuento,Precio) VALUES
            ('$registro','$value1->Producto','$value1->Cantidad','0','$precio')";
            $db->ejecutar($cadena1);
        }

        $consulta2 = "SELECT * from detalle_orden_venta WHERE detalle_orden_venta.Orden_Venta = '$registro'";
        $detalle = $db->seleccionar($consulta2);
        foreach($detalle as $value2)
        {
            $consulta3 = "SELECT * from productos WHERE productos.ProductoID = '".$value2->Producto."'";
            $producto = $db->seleccionar($consulta3);
            $cantidad = $value2->Cantidad;
            foreach($producto as $value3)
            {
                $exist=($value3->Existencia)-$cantidad;
                $cadena4="UPDATE productos SET productos.Existencia = '$exist' WHERE productos.ProductoID = '".$value3->ProductoID."'";
                $db->ejecutar($cadena4);
            }
        }
        $cadena5="DELETE FROM carrito WHERE carrito.Cliente = '".$_SESSION["id"]."'";
        $db->ejecutar($cadena5);
        echo "<div class='alert alert-primary'>";
        echo "<h2 align='center'>Compra Realizada</h2>";
        echo "</div>";
        header("refresh:2; ../index.php");        
        ?>
    </div>
</body>
</html>