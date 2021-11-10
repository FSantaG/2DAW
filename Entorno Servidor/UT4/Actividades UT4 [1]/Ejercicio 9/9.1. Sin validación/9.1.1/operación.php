<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operación</title>
</head>
<body>
    <?php
        $dig1 = $_POST["digito1"];
        $dig2 = $_POST["digito2"];
        $operador = $_POST["signo"];

        switch ($operador){
            case "+":
                $respuesta=$dig1+$dig2;
                echo "$dig1 + $dig2 = ", $respuesta;
                break;
            case "-":
                $respuesta=$dig1-$dig2;
                echo "$dig1 - $dig2 = ", $respuesta;
                break;
            case "*":
                $respuesta=$dig1*$dig2;
                echo "$dig1 x $dig2 = ", $respuesta;
                break;
            case "/":
                $respuesta=$dig1/$dig2;
                echo "$dig1 / $dig2 = ", $respuesta;
                break;
        }

    ?>
</body>
</html>