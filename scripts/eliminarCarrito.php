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
        $cadena="DELETE FROM carrito WHERE carrito.folio = '$folio'";
        $carrito=$db->ejecutar($cadena);

        header("refresh:0; ../php/vistaCarrito.php");
        ?>
    </div>
</body>
</html>