<?php



if (isset($_POST['continuar'])) {
    if (!isset($_COOKIE['productosel'])) {
        setcookie('productosel', $_POST['producto'], time() + 160);
    } else {
        $prod = $_COOKIE['productosel'];
        $prod .=  "," . $_POST['producto'];
        setcookie('productosel', $prod, time() + 160);
    }
    if (!isset($_COOKIE['unidadessel'])) {
        setcookie('unidadessel', $_POST['unidades'], time() + 160);
    } else {

        $unid = $_COOKIE['unidadessel'];
        $unid .= "," . $_POST['unidades'];
        setcookie('unidadessel', $unid, time() + 160);
    }
    header('location: finalizacion.php');
}
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

        label {
            font-size: 2em;
        }

        input,
        select {
            font-size: 1.5em;
        }

        #boton {
            font-size: 2em;
            background-color: lightblue;
            border: 3px dotted black;
            border-radius: 10px;
            padding: 5px;
            text-decoration: none;
            color: black;
        }


        #boton:hover {
            border: 4px solid blue;
            background-color: lightcyan;


            border-radius: 20%;
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <label for="prod">Producto:</label>
        <select name="producto" id="prod">
            <option value="Platanos">Plátanos</option>
            <option value="Manzanas">Manzanas</option>
            <option value="Peras">Peras</option>

        </select>
        <label for="unid">Unidades:</label>
        <input type="number" id="unid" name="unidades"><br><br>
        <input type="submit" value="continuar" id="boton" name="continuar">
    </form>
</body>

</html>