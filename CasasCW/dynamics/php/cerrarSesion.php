<?php
    session_name();
    session_id();
    session_start();

    if(isset($_SESSION["Usuario"])) {
        session_unset();
        session_destroy();
        header("location: ./FormularioIS.php");
        
    }        
?>