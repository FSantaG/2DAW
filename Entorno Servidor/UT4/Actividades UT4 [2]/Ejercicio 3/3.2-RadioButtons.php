<?php
    if (isset($_POST["enviar"])){
            echo "Usted ha elegido el color ".($_POST["color"])." de zapatillas";
            exit;
    }
    /*A diferencia de las checkboxes, los radio buttons
    no generan un array, si no un valor asociado (en este
    caso, "color" => "value").*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba con botones de selección única (Radio buttons)</title>
</head>
<body>
    <form method="post" action="">
        <label>
            Seleccione color de zapatillas: <br>
            <input type="radio" name="color" value="azul"/>Azul <br>
            <input type="radio" name="color" value="verde"/>Verde <br>
            <input type="radio" name="color" value="amarillo"/>Amarillo <br>
            <input type="radio" name="color" value="rojo"/>Rojo <br>
            <input type="radio" name="color" value="blanco"/>Blanco <br>
            <input type="submit" name="enviar" value="Aceptar"/>
        </label>
    </form>
</body>
</html>