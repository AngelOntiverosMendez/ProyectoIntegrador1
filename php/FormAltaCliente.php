<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/escuela.css">
    <style>
        #contenedor{width: 40%; margin: auto;}
        body{margin-top: 100px;}
    </style>
    <title>Registrate</title>
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

    <div class="container" id="contenedor">
        <h2>Alta Usuario</h2>
        <hr>
        <form  action="../scripts/GuardaCliente.php" method="post">
            <div class="mb-3">
                <label class="control-form" for="nombre">Tu Nombre*</label>
                <input type="text" name="nombre" placeholder="Escribe tu nombre" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="control-form" for="apellido">Tu Apellido*</label>
                <input type="text" name="apellido" placeholder="Escribe tu apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-form" for="correo">Tu Correo*</label>
                <input type="text" name="correo" placeholder="Escribe tu correo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-form" for="telefono">Tu Telefono</label>
                <input type="text" name="telefono" placeholder="Escribe tu telefono" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-form" for="telefono">Tu Codigo Postal</label>
                <input type="text" name="cp" placeholder="Escribe tu codigo postal" class="form-control">
            </div>
            <div class="mb-3">
                <label class="control-form" for="pass">Tu Contraseña*</label>
                <input type="password" name="pass" placeholder="Escribe tu contraseña" class="form-control" required>
            </div>
            <div class="mb-3">
                <h6><b>Es obligatorio llenar los campos con *</b></h6>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
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
            <label for="message-text" class="col-form-label">8711545352</label>
            
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