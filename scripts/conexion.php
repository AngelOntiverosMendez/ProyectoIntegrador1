<?php

class Database
{
    private $PDOLocal;
    private $user="root";
    private $password="admin";
    private $server="mysql:host=localhost; dbname=casarosalinda";

    function conectarDB()
    {
        try
        {
            $this->PDOLocal = new PDO($this->server,$this->user,$this->password);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    function desconectarDB()
    {
        try
        {
            $this->PDOLocal = null;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    function seleccionar($consulta)
    {
        try
        {
            $resultado = $this->PDOLocal->query($consulta);
            $fila = $resultado->fetchAll(PDO::FETCH_OBJ);

            return $fila;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    function ejecutar($query)
        {
            try
            {
                $this->PDOLocal->query($query);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

    function verificaLogin($correo,$contra)
        {
            try
            {
                $pase=0;
                $query="SELECT * FROM empleados where Correo='$correo'";
                $consulta=$this->PDOLocal->query($query);
                while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
                {
                    if(password_verify($contra,$renglon['password']))
                    {
                        $pase++;
                    }
                }

                if($pase>0)
                {
                    session_start();
                    $conexion = new Database();
                    $conexion->conectarDB();
                    $consulta="SELECT * FROM empleados where Correo='$correo'";
                    $tabla = $conexion->seleccionar($consulta);
                    foreach($tabla as $registro)
                    {
                        $nivel=$registro->Nivel;
                        $nombre=$registro->Nombre;
                        $id=$registro->EmpleadoID;
                    }
                    $_SESSION["id"]=$id;
                    $_SESSION["correo"]=$correo;
                    $_SESSION["nivel"]=$nivel;
                    $_SESSION["nombre"]=$nombre;
                    $_SESSION["falda"]=0;
                    $_SESSION["pantalon"]=0;
                    $_SESSION["playera"]=0;
                    $_SESSION["escuela"]=0;
                    echo "<div class='alert alert-primary'>";
                    echo "<h2 align='center'>Bienvenido ".$_SESSION["correo"]."</h2>";
                    echo "</div>";
                    header("refresh:2; ../index.php");
                }
                else
                {
                $query="SELECT * FROM clientes where Correo='$correo'";
                $consulta=$this->PDOLocal->query($query);
                while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
                {
                    if(password_verify($contra,$renglon['password']))
                    {
                        $pase++;
                    }
                }

                if($pase>0)
                {
                    session_start();
                    $conexion = new Database();
                    $conexion->conectarDB();
                    $consulta="SELECT * FROM clientes where Correo='$correo'";
                    $tabla = $conexion->seleccionar($consulta);
                    foreach($tabla as $registro)
                    {
                        $nivel=$registro->Nivel;
                        $nombre=$registro->Nombre;
                        $id=$registro->ClienteID; 
                    }
                    $_SESSION["id"]=$id;
                    $_SESSION["correo"]=$correo;
                    $_SESSION["nivel"]=$nivel;
                    $_SESSION["nombre"]=$nombre;
                    $_SESSION["falda"]=0;
                    $_SESSION["pantalon"]=0;
                    $_SESSION["playera"]=0;
                    $_SESSION["escuela"]=0;
                    echo "<div class='alert alert-primary'>";
                    echo "<h2 align='center'>Bienvenido ".$_SESSION["correo"]."</h2>";
                    echo "</div>";
                    header("refresh:2; ../index.php");
                }else
                {
                    echo "<div class='alert alert-danger'>";
                    echo "<h2 align='center'>Usuario o Contraseña Incorrecta</h2>";
                    echo "</div>";
                    header("refresh:2; ../php/formLogin.php");
                }
                }
                
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

        
        }

        function cerrarSesion()
        {
            session_start();
            session_destroy();
            header("Location:../index.php");
        }

}


?>