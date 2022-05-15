<?php
    session_name();
    session_id();
    session_start();

    $Usuario=(isset($_POST['Usuario']) && $_POST["Usuario"]!="")? $_POST['Usuario'] : "no se especificó";
    echo $Usuario;

    if($Usuario !== false) {
        $_SESSION["Usuario"] = $Usuario;
        echo "El usuario es: ".$_SESSION["Usuario"];
        echo "<br/>";
        echo "
            <form action='./cerrarSesion.php' method='post' target='_self'>
                <button>
                    Cerra sesión
                </button>    
            </form>
        ";
    } 
    else if(isset($_SESSION["Usuario"])){
        echo "El usuario es: ".$_SESSION["Usuario"];
        echo "
            <form action='./cerrarSesion.php' method='post' target='_self'>
                <button>
                    Cerra sesión
                </button>    
            </form>
        ";
    }
    else{
        header("location: ./FormularioIS.php");
    };
    
    /*$_SESSION["Usuario"] = $Usuario;
    echo "<br/>".$_SESSION["Usuario"];*/
?>