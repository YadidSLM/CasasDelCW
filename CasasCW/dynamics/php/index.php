<?php
    $Usuario=(isset($_POST['Usuario']) && $_POST["Usuario"]!="")? $_POST['Usuario'] : "no se especificó";
    echo $Usuario;
?>