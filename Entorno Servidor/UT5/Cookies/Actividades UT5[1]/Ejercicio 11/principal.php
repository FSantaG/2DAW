<?php
$usuactual = explode("-", $_COOKIE["usuarioactual"]);
echo "<p>Sesion de " . $usuactual[0] . " </p>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            text-align: center;


            background-color: lightgoldenrodyellow;


        }

        table {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            border-collapse: collapse;


        }

        td {
            border: 6px solid black;
            padding: 3px;
            font-size: 50px;

            background-color: lightcyan;
        }

        a {
            font-size: 2em;
            background-color: lightblue;
            border: 3px dotted black;
            border-radius: 10px;
            padding: 5px;
            text-decoration: none;
            color: black;

        }

        a:hover {
            border: 4px solid blue;
            background-color: lightcyan;
            position: relative;
            width: 5.5rem;
            height: 5.5rem;
            margin: 1rem;
            border-radius: 20%;
        }

        h1 {
            font-family: cursive;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Fruteria de Iván</h1>
    <table>
        <tr>
            <td><b>Plátanos</b></td>
            <td>10</td>
            <td>1,50</td>
        </tr>
        <tr>
            <td><b>Manzanas</b></td>
            <td>20</td>
            <td>1,80</td>
        </tr>
        <tr>
            <td><b>Peras</b></td>
            <td>30</td>
            <td>1,40</td>
        </tr>
    </table>
    <a href="Solicitud_producto.php">Solicitud de producto</a>
</body>

</html>