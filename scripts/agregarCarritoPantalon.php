<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <?php
            include 'conexion.php';
            $db=new Database();
            $db->conectarDB();
            session_start();

            extract($_POST);
            $cadena="INSERT INTO carrito(Cliente,Producto,Cantidad)
            VALUES('".$_SESSION["id"]."','".$_SESSION["pantalon"]."','$cantidad')";

            $db->ejecutar($cadena);
            
            echo "<div class='alert alert-primary'>Agregado a Carrito</div>";
            header("refresh:3; ../index.php");
            
        ?>
    </div>
</body>
</html>