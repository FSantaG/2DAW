<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        h1{
            color: blue;
        }
        p{
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Familias Gallegas</h1>
    <?php
        /*Inclusión de código de otros archivos */
        include_once("datos_fernandoS1.inc");
        include_once("f_fernandoS1.php");
        /*Visualización por pantalla de los valores solicitados. */
        echo "<p>La provincia que más ha ahorrado es ".obtenerProvinciaAhorradora($provincias)."</p>";
        echo "<p>Un ".obtenerPorcentajeAhorro($provincias)." con respecto al total.</p>";
    ?>
</body>
</html>