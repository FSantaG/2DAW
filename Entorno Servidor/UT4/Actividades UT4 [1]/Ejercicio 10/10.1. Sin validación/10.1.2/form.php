<?php
    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
    $caracter = $_POST["letra"];
    if(strpos($nombre, $caracter)){
        echo "El caracter $caracter está presente en el nombre $nombre";
    }else{
        echo "El caracter $caracter no está presente en el nombre $nombre";
    }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar caracteres</title>
</head>
<body>
    <form action="./form.php" target="_blank" method="post">
        <label>
            Inserte un nombre: <input type="text" name="nombre"/>
        </label>
        <label>
            ¿Letra a buscar? <input type="text" name="letra" maxlength="1"/>
        </label>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
</body>
</html>