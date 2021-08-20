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
        
        extract($_POST);
        $date= date("Y") . "-" . date("m") . "-" . date("d");
        $cadena = "INSERT INTO orden_compra(Fecha, Proveedor) VALUES ('$date', '$prove')";
        $db->ejecutar($cadena);
        
        $consulta = "SELECT * from orden_compra WHERE orden_compra.Proveedor = '$prove'";
        $orden = $db->seleccionar($consulta);
        $registro = 0;
        foreach($orden as $value)
        {
            $value->Reg;
        }
        $registro = $value->Reg;

        $cadena1 = "INSERT INTO detalle_orden_compra(Orden_Compra, Producto, Cantidad, Precio) 
        VALUES ('$registro', '$productos', '$cantidad', '$precio')";
        $db->ejecutar($cadena1);

        $consulta1 = "SELECT * from productos where ProductoID = '$productos'";
        $update = $db->seleccionar($consulta1);
        $exist = 0;
        foreach($update as $value1)
        {
            $value1->Existencia;
        }
        $exist = ($value1->Existencia) + $cantidad;

        $cadena2 = "UPDATE productos SET productos.Existencia = '$exist' WHERE productos.ProductoID = '$productos'";
        $db->ejecutar($cadena2);

        echo "<div class='alert alert-primary'>";
        echo "<h2 align='center'>Compra Realizada</h2>";
        echo "</div>";
        header("refresh:2; ../php/vistaadmn.php");  
        ?>
    </div>
</body>
</html>