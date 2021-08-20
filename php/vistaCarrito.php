<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>    
<title>Carrito</title>
</head>
<body>
<header >
        <nav style="background-color:#fb958d; font-size: 20px; " class=" fixed-top navbar navbar-expand-lg navbar-light  Small shadow p-3" >
            <div class="container-fluid">
              <a class="navbar-brand" href=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <a class="navbar-brand" href="../index.php">
                    <img src="../img/rosa.png" alt="" width="70" height="70" style="border-radius: 50%; margin-top: -15px; margin-bottom: -15px;" >                    
                  </a>   
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a href="Filtro.php" class="nav-link"  >Filtro</a>                   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Contactanos</a>                    
                  </li>
                    <?php
                  session_start();
                  if(isset($_SESSION["nombre"]))
                  {
                  if($_SESSION["nivel"] < 3)
                  {                   
                    ?>
                  <li class="nav-item">
                    <a class="nav-link" href="vistaadmn.php">Empleados</a>
                  </li>
                  <?php
                  }}
                    ?>
                </ul>
                <ul class="nav justify-content-end">
                  <?php
                    if(isset($_SESSION["nombre"]))
                    {
                  ?>
                <li class="nav-item">
                  <a class="nav-link" href="vistaCarrito.php"><button type="button" class=" btn btn-outline-dark">Carrito</button></a>
                  </li>
                  <?php
                    }
                  ?>
                  <li class="nav-item"> 
                <?php
                  if(isset($_SESSION["nombre"]))
                  {
                    echo "<h6 align='right'>Usuario: ".$_SESSION["nombre"]."</h6>";
                    echo "<h6 align='right'><a href='../scripts/cerrarSesion.php'>[Cerrar Sesion]</a></h6>";
                  }
                  else
                  {
                ?>
                </li>
                </ul>
                <a href="FormLogin.php">
                <button type="button" class=" btn btn-outline-dark">Iniciar Sesion</button></a>
                <?php
                  }
                ?>
              </div>
            </div>
          </nav>
          
    </header>
    <br><br><br><br>
    <div class="container">
      <form action="vistaVenta.php" method="POST">
            <?php
            Include '../scripts/conexion.php';
            $db=new Database();
            $db->conectarDB();
            $cadena = "SELECT carrito.folio,carrito.Producto,carrito.Cliente,carrito.Cantidad,productos.Nombre,
            productos.Precio,productos.Imagen,escuelas.Nombre as escuela,tallas.Talla from carrito inner join productos on 
            carrito.Producto=productos.ProductoID  inner join escuelas on productos.Escuela=escuelas.EscuelaID 
            inner join tallas on productos.Talla=tallas.TallaID  where carrito.Cliente='".$_SESSION["id"]."'";
            $reg = $db->seleccionar($cadena);
            ?>
            <div class="row">
            <div align='center' class="col col-md-1 bg-dark card" style="color: white;">Imagen</div>
            <div align='center' class="col col-md-5 bg-dark card" style="color: white;">Informacion</div>
            <div align='center' class="col col-md-1 bg-dark card" style="color: white;">Precio</div>
            <div align='center' class="col col-md-1 bg-dark card" style="color: white;">Cantidad</div>
            <div align='center' class="col col-md-2 bg-dark card" style="color: white;">Subtotal</div>
            <div align='center' class="col col-md-2 bg-dark card" style="color: white;">
          </div>
          
          <div class="row">
            <?php
              $total=0;
              foreach($reg as $fila)
              {
                echo "<hr>";
                echo "<div align='center' class='col col-md-1 card'><img style='height:100px; width:100px;' src='../".$fila->Imagen."'></div>";
                echo "<div align='center' style='padding-top:40px;' class='col col-md-5 card'>" .$fila->Nombre." ".$fila->escuela." Talla ".$fila->Talla."</div>";
                echo "<div align='center' style='padding-top:40px;' class='col col-md-1 card'>$" .$fila->Precio."</div>";
                echo "<div align='center' style='padding-top:40px;' class='col col-md-1 card'>" .$fila->Cantidad."</div>";
                echo "<div align='center' style='padding-top:40px;' class='col col-md-2 card'>$" .$fila->Cantidad*$fila->Precio."</div>";
                echo "<div align='center' style='padding-top:40px;' class='col col-md-2 card'><button value=".$fila->folio." name='folio' class='btn btn-primary btn-sm' type='submit' formaction='../scripts/eliminarCarrito.php'>Eliminar</button></div>";
                $total = $total + ($fila->Cantidad*$fila->Precio);
                echo "<hr>";
              }
              echo "<hr>";
              echo "<div align='center' class='offset-md-7 col-1'>Total: $</div>";
              echo "<div align='center' class='col-2'><input type='text' class='form-control' name='total' disabled value='".$total."'></div>";
              if($total>0)
              {
            ?>
              <div align='center' class="col-2 "><button class="btn btn-primary btn-lg" type="submit">Comprar</button></div>
              <?php
              }
              ?>
        </div>
      </form>
      </div>

    <!-- MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contacto y ubicacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="text-align: center;" class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Casarosalinda@gmail.com:</label>
            
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">8712918827</label>
            
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Horarios:</label><br>
            <label for="message-text" class="col-form-label">8:00 AM - 8:00 PM</label><br>
            <label for="message-text" class="col-form-label">Lunes-Sabado</label>
            
          </div>
        </form>
      </div>
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Mercado%20Ju%C3%A1rez,%20Torre%C3%B3n,%20Coah.&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com/%22%3Esoap2day</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net/%22%3Ehow to get google map embed code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;margin: auto;border: solid 2px black;}</style></div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>