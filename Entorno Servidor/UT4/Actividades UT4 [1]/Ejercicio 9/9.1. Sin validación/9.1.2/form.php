<?php
    if(isset($_POST["digito1"]) && isset($_POST["digito2"]) && isset($_POST["signo"])){
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
    }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="digito1" placeholder="Inserte un número"/>
        <select name="signo">
            <option value="+">+</option>
            <option value="-">-</option> 
            <option value="*">x</option> 
            <option value="/">/</option> 
        </select>
        <input type="number" name="digito2" placeholder="Inserte un número"/>
        </br>
        <input type="submit" value="Enviar"/>
        </br>
    </form>
</body>
</html>