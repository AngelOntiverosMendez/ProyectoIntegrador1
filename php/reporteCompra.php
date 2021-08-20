<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
    <?php
    include '../scripts/conexion.php';
    extract($_POST);
    $CONE =new database();
    $CONE -> conectarDB();
    $consulta = "SELECT orden_compra.Reg as Orden, orden_compra.Fecha, proveedores.Nombre as Proveedor, concat(productos.Nombre, ' ', escuelas.Nombre) as Producto, tallas.Talla, detalle_orden_compra.Cantidad, detalle_orden_compra.Precio as Total 
    FROM proveedores INNER JOIN orden_compra on proveedores.ProveedorID = orden_compra.Proveedor INNER JOIN detalle_orden_compra on orden_compra.Reg = detalle_orden_compra.Orden_Compra INNER JOIN productos on detalle_orden_compra.Producto = productos.ProductoID INNER JOIN tallas on productos.Talla = tallas.TallaID INNER JOIN escuelas on productos.Escuela = escuelas.EscuelaID Where orden_compra.Fecha BETWEEN '$f3' and '$f4' ORDER BY orden_compra.Fecha";
    $tabla = $CONE->seleccionar($consulta);
    echo " <table class='table'>
    <thead class='table-dark'>
      <tr> 
      <th>Orden</th>
      <th>Fecha</th>
      <th>Proveedor</th>
      <th>Talla</th>
      <th>Cantidad</th>
      <th>Total</th>
      
    </tr>
    </thead>
    <tbody>";
    foreach ($tabla as $registro){
        echo "<tr> ";
        echo"<td> $registro->Orden </td>";
        echo"<td> $registro->Fecha </td>";
        echo"<td> $registro->Proveedor </td>";
        echo"<td> $registro->Talla </td>";
        echo"<td> $registro->Cantidad </td>";
        echo"<td> $registro->Total </td>";
        
        echo "</tr>";
    }
    echo "
    </tbody>
    </table>";
    
        ?><br><br>
<a href="vistaadmn.php"><button   type="button" class="btn btn-danger">Regresar</button></a>
</div>
</body>
</html>