<?php
    if (isset($_POST["enviar"])){
            echo "Usted ha elegido el color ".($_POST["color"])." de zapatillas";
            exit;
    }
    /*
    En listas de selección única, se pueden recoger los valores tanto
    con el atributo value (el cual emitirá el valor asignado)
    por defecto en ese atributo), o sin atributo (el cual devolverá)
    el valor entre las etiquetas Option).
    */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica con selects sin atributo múltiple</title>
</head>
<body>
    <form method="post" action="">
        <label>
            Seleccione el color de zapatillas: 
            <select name="color">
                <option>--Seleccione uno--</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <option value="amarilo">Amarillo</option>
            </select>
        </label><br>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
</body>
</html>