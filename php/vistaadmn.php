<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/vista.css">
    <script src="../js/vistaadm.js"></script>
    <title>Document</title>
    <style>
        #ocultar ,#ocultar1, #ocultar2,#ocultar3,#ocultar4,#ocultar5,#botonclien,#botonemp,#botonrepven,#botonrepcom,#botonagreco,#botonagreve{
            display: none;
        }
       #botones1,#botones2,#botones3{
           
           width:100%;
           
       }
        
    </style>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">CasaRosalinda</span> </a>
                <div  class="nav_list"> <a onClick="botones3()"  href="#" class="nav_link active"> <i  class='bx bx-grid-alt nav_icon'></i> <span   class="nav_name">Agregar</span> </a> <a onClick="botones()"   href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a> <a onClick="botones2()"  href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reportes</span> </a> </div>
            </div> <a href="../index.php" class="nav_link" target="a_blank"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Salir</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>AQUI VAN TABLAS</h4>
      
        <div class="col-md-2" id="botones1" >
        <button id="botonclien" onClick="mostrartabla()" type="button" class="btn btn-danger">Clientes</button>
        <button id="botonemp" onClick="mostrartabla1()"  type="button" class="btn btn-danger">Empleados</button>
      </div>
      <div class="col-md-2" id="botones2" >
        <button id="botonrepven" onClick="mostrartabla2()" type="button" class="btn btn-danger">Reporte ventas</button>
        <button id="botonrepcom" onClick="mostrartabla3()"  type="button" class="btn btn-danger">Reporte compras</button>
      </div>
      <div class="col-md-2" id="botones3" >
        <button id="botonagreco" onClick="mostrartabla4()" type="button" class="btn btn-danger">Alta Compra</button>
        <button id="botonagreve" onClick="mostrartabla5()"  type="button" class="btn btn-danger">Alta Empleados</button>
      </div>
      <br>
        
        <!--AQUI EMPIEZA TABLA1 -->
    <div class="container" id="ocultar" >
        <h3>Clientes</h3>
    <?php
    include '../scripts/conexion.php';
    $CONE =new database();
    $CONE -> conectarDB();
$consulta = "SELECT clientes.ClienteID, concat(clientes.Nombre,' ', clientes.Apellido) as Cliente, 
clientes.Correo, clientes.Telefono, clientes.CP FROM clientes";
$tabla = $CONE->seleccionar($consulta);
echo " <table class='table'>
<thead class='table-dark'>
  <tr> 
  <th>ID</th>
  <th>Cliente</th>
  <th>Correo</th>
  <th>Telefono</th>
  <th>Codigo Postal</th>
</tr>
</thead>
<tbody>";
foreach ($tabla as $registro){
    echo "<tr> ";
    echo"<td> $registro->ClienteID </td>";
    echo"<td> $registro->Cliente </td>";
    echo"<td> $registro->Correo </td>";
    echo"<td> $registro->Telefono </td>";
    echo"<td> $registro->CP </td>";
    echo "</tr>";
}
echo "
</tbody>
</table>";

    ?>
    </div>
    
    <!--AQUI ACABA TAABLA1 -->
     <!--AQUI EMPIEZA TAABLA2 -->
     <div class="container" id="ocultar1">
         <h3>Empleados</h3>
    <?php
   
$consulta = "SELECT empleados.EmpleadoID, concat(empleados.Nombre, ' ', empleados.Apellido) 
as Empleado, empleados.Fecha_Nac, empleados.Correo, empleados.Telefono, 
empleados.Direccion from empleados ";
$tabla = $CONE->seleccionar($consulta);
echo " <table class='table'>
<thead class='table-dark'>
  <tr> 
  <th>ID</th>
  <th>Empleado</th>
  <th>Fecha de Nacimiento</th>
  <th>Correo</th>
  <th>Telefono</th>
  <th>Direccion</th>
</tr>
</thead>
<tbody>";
foreach ($tabla as $registro){
    echo "<tr> ";
    echo"<td> $registro->EmpleadoID </td>";
    echo"<td> $registro->Empleado </td>";
    echo"<td> $registro->Fecha_Nac </td>";
    echo"<td> $registro->Correo </td>";
    echo"<td> $registro->Telefono </td>";
    echo"<td> $registro->Direccion </td>";
    echo "</tr>";
}
echo "
</tbody>
</table>";

    ?>
    </div>
      <!--AQUI ACABA TAABLA2 -->
      <!--AQUI EMPIEZA TAABLA3 -->
      <div class="container" id="ocultar2">
          <div class="row">
        <h3>Reporte ventas</h3>
            <form action="reporteVenta.php" method="POST">
            <div class="col-5">
                <div class="input-group">
                    <input type="date" class="form-control" name="f1" step="1" value="<?php echo date("Y-m-d");?>">&nbsp;
                    <input type="date" class="form-control" name="f2" step="1" value="<?php echo date("Y-m-d");?>">
                    <button type="sumbit" class="btn btn-lg btn-primary">Ver</button><br><br>
                </div>
            </div>
            </form>
    </div>
    </div>
    <!--AQUI ACABA TAABLA3 -->
    <!--AQUI EMPIEZA TAABLA3 -->
    <div class="container" id="ocultar3">
          <div class="row">
        <h3>Reporte compra</h3>
            <form action="reporteCompra.php" method="POST">
            <div class="col-5">
                <div class="input-group">
                    <input type="date" class="form-control" name="f3" step="1" value="<?php echo date("Y-m-d");?>">&nbsp;
                    <input type="date" class="form-control" name="f4" step="1" value="<?php echo date("Y-m-d");?>">
                    <button type="sumbit" class="btn btn-lg btn-primary">Ver</button><br><br>
                </div>
            </div>
            </form>
    
    </div>
    </div>
    <!--AQUI ACABA TAABLA3 -->
    <!--AQUI EMPIEZA TAABLA4 -->
    
        <!--AQUI EMPIEZA TAABLA5 -->
        <div class="container" id="ocultar3">
          <h3>Productos</h3>
    <?php
    
$consulta = "SELECT orden_compra.Reg as Orden, orden_compra.Fecha, proveedores.Nombre as Proveedor, concat(productos.Nombre, ' ', escuelas.Nombre) as Producto, tallas.Talla, detalle_orden_compra.Cantidad, detalle_orden_compra.Precio as Total 
FROM proveedores INNER JOIN orden_compra on proveedores.ProveedorID = orden_compra.Proveedor INNER JOIN detalle_orden_compra on orden_compra.Reg = detalle_orden_compra.Orden_Compra INNER JOIN productos on detalle_orden_compra.Producto = productos.ProductoID INNER JOIN tallas on productos.Talla = tallas.TallaID INNER JOIN escuelas on productos.Escuela = escuelas.EscuelaID";
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

    ?>
    </div>
    <!--AQUI ACABA TAABLA5 -->
<!--AGREGAR ORDEN COMPRA -->
<div class="container" id="ocultar4">
<h2>Alta Compra</h2>
        <hr>
        <div class="row">
        <form action="../scripts/altaRegCompra.php" method="post">
            
            <?php
               

                $consulta="SELECT proveedores.ProveedorID, proveedores.Nombre FROM proveedores";
                $proveedores = $CONE->seleccionar($consulta);
                
                echo "<div class='col col-4'>";
                echo "<label class='control-form' for='nombre'>Proveedor</label>";
                echo "<select class='form-select' name='prove'";
                foreach($proveedores as $value)
                {
                    echo "<option value='".$value->ProveedorID."'>".$value->Nombre."</option>";
                }
                echo "</select>";
                echo "</div>";

                $consulta1="SELECT productos.ProductoID, productos.Nombre as 'Tipo', productos.Color, 
                productos.Material, tallas.Talla, productos.Precio, escuelas.Nombre as Escuela, 
                productos.Existencia, categorias.Nombre as Categoria, productos.Imagen FROM productos 
                INNER JOIN categorias on productos.Categoria = categorias.CategoriaID 
                INNER JOIN escuelas on productos.Escuela = escuelas.EscuelaID 
                INNER JOIN tallas on productos.Talla = tallas.TallaID";
                $productos = $CONE->seleccionar($consulta1);
                
                echo "<div class='col col-4'>";
                echo "<label class='control-form' for='nombre'>Producto</label>";
                echo "<select class='form-select' name='productos'";
                foreach($productos as $value)
                {
                    echo "<option value='".$value->ProductoID."'>".$value->Tipo." ".$value->Escuela." Talla: ".$value->Talla."</option>";
                }
                echo "</select>";
                echo "</div>";
                
                echo "<br>";
                echo "<div class='col col-4'>";
                echo "<label class='control-form' for='cantidad'>Cantidad:</label>";
                echo "<br>";
                echo "<input type='number' min='1' name='cantidad' value='1'>";
                echo "</div>";

                echo "<div class='col col-4'>
                <label class='control-form' for='precio'>Precio:</label>
                <input type='number' min='1' name='precio' placeholder='Escribe el Precio' class='form-control'>
                </div>";
            ?>
            <br>
            <div class="d-grid gap-2 col-3">
                <button  class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>
        </div>
    </div>
<!--TERMINA AGREGAR COMPRA-->
    <!--AGREGAR EMPLEADO -->
    <div class="container" id="ocultar5">
        <h2>Alta Empleado</h2>
        <hr>
        <div class="row">
        <form  action="../scripts/GuardaEmp.php" method="post">
            <div class="col-6">
                <label class="control-form" for="nomemp">Nombre del empleado:</label>
                <input type="text" name="nomemp" placeholder="Escribe el nombre del empleado" class="form-control" required autofocus>
            </div>
            <div class="col-6">
                <label class="control-form" for="apem">Apellido:</label>
                <input type="text" name="apem" placeholder="Escribe el apellido del empleado" class="form-control" required>
            </div>
            <div class="col-3">
                <label class="control-form" for="fecha">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fecha" step="1" value="<?php echo date("Y-m-d");?>" required>
            </div>
            <div class="col-6">
                <label class="control-form" for="correo">Correo:</label>
                <input type="text" name="correo" placeholder="Escriba el correo" class="form-control" required>
            </div>
            <div class="col-6">
                <label class="control-form" for="telem">Telefono:</label>
                <input type="text" maxlength="10" name="telem" placeholder="Escriba el telefono" class="form-control" required>
            </div>
            <div class="col-6">
                <label class="control-form" for="direm">Direccion:</label><br>
                <textarea name="direm" placeholder="Escriba la direccion" cols="50" rows="5"></textarea>
            </div>
            <div class="col-6">
                <label class="control-form" for="pass">Contraseña:</label>
                <input type="password" name="pass" placeholder="Escriba su contraseña" class="form-control" required>
            </div>
            <div class="col-6">
                <h6><b>Es obligatorio llenar los campos con *</b></h6>
            </div>
            <div class="d-grid gap-2 col-6">
                <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
        </form>
        </div>
    </div>
<!--TERMINA AGREGAR EMPLEADO-->
    </div>
    <!--Container Main end-->

    
</body>
</html>