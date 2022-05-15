<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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

    <form action="../../MiCasa.html" method="POST">
        <fieldset>
            <button type="submit">Conoce tu casa</button>
        </fieldset>
    </form>

</body>

</html>

    //Petición

    $peticion = "INSERT INTO usuario2 VALUES ('$Apodo','$Nombre','$casas')";
    $query = mysqli_query($conexion, $peticion);
    var_dump($query);

?>
