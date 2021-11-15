<?php
    if (isset($_POST["enviar"])){
        foreach($_POST["color"] as $clave => $valor){
            echo ($clave)." ";
            /*Se pone la clave porque el valor, al ser una checkbox, sería "On" (encendido)*/ 
        }
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba con checkboxes</title>
</head>
<body>
    <form method="post" action="">
        <label>
            Seleccione color de zapatillas: <br>
            <input type="checkbox" name="color[azul]"/>Azul <br>
            <input type="checkbox" name="color[verde]"/>Verde <br>
            <input type="checkbox" name="color[amarillo]"/>Amarillo <br>
            <input type="checkbox" name="color[rojo]"/>Rojo <br>
            <input type="checkbox" name="color[blanco]"/>Blanco <br>
            <input type="submit" name="enviar" value="Aceptar"/>
        </label>
    </form>
</body>
</html>