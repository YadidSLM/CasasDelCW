<?php
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("PASSWORD", "");
    define("DB", "casascw");
    function connect()
    {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
        if(!$conexion)
        {
            mysqli_error();
            echo "No se puede conectar a casascw";
        }
        else
        {
            echo "Conectado";
        }
    }
    
?>