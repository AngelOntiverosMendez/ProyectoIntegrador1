<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Usuario</title>
</head>
<body>
    <div class="container">
        <?php
            include 'conexion.php';
            $db=new Database();
            $db->conectarDB();

            extract($_POST);

            $hash=password_hash($pass, PASSWORD_DEFAULT);
            $cadena="INSERT INTO clientes(Nombre,Apellido,Correo,Telefono,CP,password,Nivel)
            VALUES('$nombre','$apellido','$correo','$telefono','$cp','$pass',3)";

            $db->ejecutar($cadena);
            $db->desconectarDB();

            echo "<div class='alert alert-success'>Usuario Registrado</div>";
            header("refresh:3; ../php/formLogin.php");
        ?>
    </div>
</body>
</html>