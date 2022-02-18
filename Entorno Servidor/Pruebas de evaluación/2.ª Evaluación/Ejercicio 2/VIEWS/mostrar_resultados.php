<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <?php
    echo "<ul>";
        foreach($datos as $clave => $valor){
            echo "<li>".$valor."</li>";
        }
    echo "</ul>";
    echo "<a href='../index.php'>Volver al menú</a>";
    ?>
</body>
</html>