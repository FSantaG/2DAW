<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
</head>
<body>
    <?php 
    $nombre = $_POST["nombre"];
    $caracter = $_POST["letra"];
    if(strpos($nombre, $caracter)){
        echo "El caracter $caracter está presente en el nombre $nombre";
    }else{
        echo "El caracter $caracter no está presente en el nombre $nombre";
    }
    ?>
</body>
</html>