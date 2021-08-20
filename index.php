<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/escuela.css">
    <title>Document</title>
</head>
<body>
  <!-- ESTILOS-->

  <style>
    #galeria .col-md-4{
    margin: 0 !important;
    padding: 25px;
}
#galeria img{
 width: 100%;
 height: 350px;
 box-shadow: 2px 2px 5px #999;
}

#cambpag 
{    
    margin-top: 60px;
}
#galeria img:hover{
  border:5px solid white;
}
  </style>
    <header >
        <nav style="background-color:#fb958d; font-size: 20px; " class=" fixed-top navbar navbar-expand-lg navbar-light  Small shadow p-3" >
            <div class="container-fluid">
              <a class="navbar-brand" href=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <a class="navbar-brand" href="">
                    <img src="IMG/rosa.png" alt="" width="70" height="70" style="border-radius: 50%; margin-top: -15px; margin-bottom: -15px;" >                    
                  </a>   
                  <li class="nav-item">
                    <a class="nav-link" href="">Inicio</a>
                  </li>                  
                  <li class="nav-item">
                    <a href="php/Filtro.php" class="nav-link"  >Filtro</a>                   
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
                    <a class="nav-link" href="php/vistaadmn.php">Empleados</a>
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
                  <a class="nav-link" href="php/vistaCarrito.php"><button type="button" class=" btn btn-outline-dark">Carrito</button></a>
                  </li>
                  <?php
                    }
                  ?>
                  <li class="nav-item"> 
                <?php
                  if(isset($_SESSION["nombre"]))
                  {
                    echo "<h6 align='right'>Usuario: ".$_SESSION["nombre"]."</h6>";
                    echo "<h6 align='right'><a href='scripts/cerrarSesion.php'>[Cerrar Sesion]</a></h6>";
                  }
                  else
                  {
                ?>
                </li>
                </ul>
                <a href="php/FormLogin.php">
                <button type="button" class=" btn btn-outline-dark">Iniciar Sesion</button></a>
                <?php
                  }
                ?>
              </div>
            </div>
          </nav>        
    </header>
    <br><br><br><br>

    <div id="carouselExampleDark" style="margin-top: 50px;" class="d-none d-sm-none d-md-block carousel carousel-white slide offset-md-2 col-md-8 offset-md-2 shadow-sm p-3 " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div  class="carousel-inner ">
          <div class="carousel-item active" data-bs-interval="10000">
            <a href="php/Cbtis156.php"><img src="img/cbtis156.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:white ; text-shadow: 3px 3px 3px black;">PREPARATORIA CBTIS 156</h5>
              
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <a href="php/NewLag.php"><img src="img/escuela_nueva_laguna.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:white ; text-shadow: 3px 3px 3px black;">ESCUELA PRIMARIA NUEVA LAGUNA</h5>
            
            </div>
          </div>
          <div class="carousel-item">
            <a href="php/cecytec.php"><img src="img/cecytec.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:white ; text-shadow: 3px 3px 3px black;">PREPARATORIA CECYTEC </h5>
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
 </section>
<div id="galeria" class="container" style="margin-top: 40px;">
     <div class="text-center">
     <h2>Uniformes</h2>
     </div>
     <div class="row" align="center">
       <div class="col-md-4"><a href="php/ColegioMijares.php"> <img src="img/ColegioMijaresLogo.jpg" alt="">Colegio Mijares</a></div>
       <div class="col-md-4"><a href="php/cecytec.php"> <img src="img/CECYTECLogo.jpg" alt="">Cecytec</a></div>
       <div class="col-md-4"><a href="php/NewLag.php"> <img src="img/NuevaLagunaLogo.png" alt="">Primaria Nueva Laguna</a></div>
       <div class="col-md-4"><a href="php/Cbtis156.php"> <img src="img/CBTIS156Logo.png" alt="">Cbtis156</a></div>
       <div class="col-md-4"><a href="php/SecTec1.php"> <img src="img/Tecnica1Logo.jpeg" alt="">Secundaria Tecnica #1</a></div>
       <div class="col-md-4"><a href="php/EscEsp.php"> <img src="img/ColegioEspañaLogo.jpg" alt="">Escuela España</a></div>        
     </div>
    </div>

<div class="footer">
<footer class="bg-light text-center text-lg-start ">

  <div class="container p-4">
 
    <div class="row">
      
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Redes</h5>

        <p>
          Facebook: <a style="text-decoration: none;" href="https://www.facebook.com/casarosalindas">CasaRosalinda</a>
        </p>
      </div>
   

    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Informacion</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      
    </div>
   
  </div>



  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">Rosalinda.com</a>
  </div>

</footer>
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