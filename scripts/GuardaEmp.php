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
            include '../scripts/conexion.php';
            $db=new Database();
            $db->conectarDB();

            extract($_POST);

            $hash=password_hash($pass, PASSWORD_DEFAULT);
            $cadena="INSERT INTO empleados(Nombre, Apellido, Fecha_Nac, Correo, Telefono, Direccion, password, Nivel)
            VALUES ('$nomemp', '$apem', '$fecha', '$correo', '$telem', '$direm', '$hash', 2)";

            $db->ejecutar($cadena);
            $db->desconectarDB();
            echo "<div class='alert alert-primary'>";
            echo "<h2 align='center'>Empleado Registrado</h2>";
            echo "</div>";
            header("refresh:2; ../php/vistaadmn.php");  
        ?>
    </div>
</body>
</html>