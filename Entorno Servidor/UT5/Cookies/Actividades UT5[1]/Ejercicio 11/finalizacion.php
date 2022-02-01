<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra-ME</title>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            background-color: lightgoldenrodyellow;
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

        table {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            text-align: center;
            border: 2px black solid;
        }

        th {
            border: 2px black dotted;
        }
    </style>
</head>

<body>




    <table>
        <tr>
            <th>PRODUCTO</th>
            <th>UNIDADES</th>
            <th>Total</th>
        </tr>

        <?php
        $total = 0;
        $tpparcial = 0;
        $tpeparcial = 0;
        $tmparcial = 0;
        $tp = 0;
        $tm = 0;
        $tpe = 0;
        $prod =    $_COOKIE['productosel'];
        $unid =   $_COOKIE["unidadessel"];

        $prods = explode(",", $prod);
        $unids = explode(",", $unid);


        for ($i = 0; $i < count($prods); $i++) {
            if ($prods[$i] == "Platanos") {
                $tp = $tp + ($unids[$i] * 1.50);
            }
            if ($prods[$i] == "Manzanas") {
                $tm = $tm + ($unids[$i] * 1.80);
            }
            if ($prods[$i] == "Peras") {
                $tpe = $tpe + ($unids[$i] * 1.40);
            }
            echo '<tr>';
            echo '<td>' . $prods[$i] . '</td>';
            echo '<td>' . $unids[$i] . '</td>';
            if ($prods[$i] == "Platanos") {
                $tpparcial = ($unids[$i] * 1.50);
                echo '<td>' .  $tpparcial . '€</td>';
            }
            if ($prods[$i] == "Manzanas") {
                $tmparcial = ($unids[$i] * 1.80);
                echo '<td>' .  $tmparcial . '€</td>';
            }
            if ($prods[$i] == "Peras") {
                $tpeparcial =  ($unids[$i] * 1.40);
                echo '<td>' .  $tpeparcial . '€</td>';
            }
            echo '</tr>';
        }
        $total = $tp + $tm + $tpe;
        setcookie('totalprod', $total, time() + 160);
        echo '<tr>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td>' .  $total . '€</td>';
        echo '</tr>';
        //echo 'El precio total de los Platanos es: ' . $tp . "<br>";
        // echo 'El precio total de los Manzanas es: ' . $tm . "<br>";
        // echo 'El precio total de los Peras es: ' . $tpe . "<br>";

        // echo 'El precio total  es: ' . $total . "<br>";



        ?>


    </table>


    <a href="pago.php">Pagar</a>
    <a href="Solicitud_producto.php">Inicio</a>
    <a href="fin.php">Salir</a>

</body>

</html>