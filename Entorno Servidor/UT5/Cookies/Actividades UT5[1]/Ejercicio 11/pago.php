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
    </style>
</head>

<body>


    <?php
    $preciopagado = explode("-", $_COOKIE["usuarioactual"]);

    if ($preciopagado[1] < 20) {
        $totalco =   $_COOKIE['totalprod'];
        echo "<h3>Ha pagado un total de: " . $totalco . "€</h3>";
        $nuevosaldo = $preciopagado[0] . "-" . $totalco;
        setcookie("usuarioactual", $nuevosaldo, time() + 60);
        setcookie("productosel", "", time() - 1000);
        setcookie("unidadessel", "", time() - 1000);
        setcookie('totalprod', "", time() - 1000);
        die("Su compra se ha realizado con exito");
    } else if ($preciopagado[1] >= 20) {
        $totalco =   $_COOKIE['totalprod'];
        $totalcondescuento = $totalco * 0.9;
        $totaldescontado = $totalco * 0.1;
        echo "<h3>Ha pagado un total de: " . $totalcondescuento . "€</h3>";
        echo "<h3>Se le ha aplicado un descuento de 10% por antiguas compras : " . "-" . $totaldescontado . "€</h3>";
        $nuevosaldo = $preciopagado[0] . "-" . "0";
        setcookie("usuarioactual", $nuevosaldo, time() + 60);
        setcookie("productosel", "", time() - 1000);
        setcookie("unidadessel", "", time() - 1000);
        setcookie('totalprod', "", time() - 1000);
        die("Su compra se ha realizado con exito");
    }
    ?>
</body>

</html>