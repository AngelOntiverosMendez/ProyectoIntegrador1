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
    $conexion= new Database();
    $conexion->conectarDB();
$consulta = "SELECT orden_venta.Reg as Orden, orden_venta.Fecha ,concat(clientes.Nombre, ' ', 
clientes.Apellido) as Cliente, concat(productos.Nombre, ' ', escuelas.Nombre) as Producto, tallas.Talla, 
productos.Precio as PrecioU, detalle_orden_venta.Cantidad, (detalle_orden_venta.Cantidad*productos.Precio) as 
Subtotal, detalle_orden_venta.Descuento, ((detalle_orden_venta.Cantidad*productos.Precio)-((detalle_orden_venta.Cantidad*productos.Precio)*detalle_orden_venta.Descuento)) as Total 
FROM clientes INNER JOIN orden_venta on clientes.ClienteID = orden_venta.Cliente 
INNER JOIN detalle_orden_venta on orden_venta.Reg = detalle_orden_venta.Orden_Venta 
INNER JOIN productos on detalle_orden_venta.Producto = productos.ProductoID 
INNER JOIN tallas on productos.Talla = tallas.TallaID INNER JOIN escuelas on productos.Escuela = escuelas.EscuelaID Where orden_venta.Fecha BETWEEN '$f1' and '$f2' ORDER BY orden_venta.Fecha";
$tabla = $conexion->seleccionar($consulta);

echo " <table class='table'>
<thead class='table-dark'>
<tr> 
<th>#Orden</th>
<th>Fecha</th>
<th>Cliente</th>
<th>Producto</th>
<th>Talla</th>
<th>Precio/u</th>
<th>Cantidad</th>
<th>Subtotal</th>
<th>Descuento</th>
<th>Total</th>
</tr>
</thead>
<tbody>";
foreach ($tabla as $registro){
echo "<tr> ";
echo"<td> $registro->Orden </td>";
echo"<td> $registro->Fecha </td>";
echo"<td> $registro->Cliente </td>";
echo"<td> $registro->Producto </td>";
echo"<td> $registro->Talla </td>";
echo"<td> $registro->PrecioU </td>";
echo"<td> $registro->Cantidad </td>";
echo"<td> $registro->Subtotal </td>";
echo"<td> $registro->Descuento </td>";
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