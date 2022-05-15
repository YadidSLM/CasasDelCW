<?php
    $Apodo=(isset($_POST['Apodo']) && $_POST["Apodo"]!="")? $_POST['Apodo'] : "no se especificó";
    echo $Apodo;
    echo '<br/>';

    $Nombre=(isset($_POST['Nombre']) && $_POST["Nombre"]!="")? $_POST['Nombre'] : "no se especificó";
    echo $Nombre;
    echo '<br/>';
    
    $casas=(isset($_POST['casas']) && $_POST["casas"]!="")? $_POST['casas'] : "no se especificó";
    echo $casas;

?>