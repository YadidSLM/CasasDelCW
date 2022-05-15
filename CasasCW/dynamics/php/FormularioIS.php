
<?php
    session_name();
    session_id();
    if (isset($_SESSION["Usuario"])) {
        header("location ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <label for="Usuario">Usuario</label>
            <input type="text" name="Usuario">
            <br>
            <p><a href="./FormularioR.html">Registrate</a></p> 
            </i></strong>
            <button type="submit">Enviar</button>
            <button type="reset">Eliminar</button>
        </fieldset>
    </form>
    
</body>
</html>