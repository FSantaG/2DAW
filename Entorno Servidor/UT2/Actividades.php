<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIOS UT2</title>
</head>

<body>
    <!--EJERCICIOS DE LA UT 2 (Mirar PDF para enunciado)-->
    <h2>Ejercicio 1</h2>
    <?php
    $num1 = 10;
    $num2 = 7;
    $num3 = -3;

    $numMayor = ($num1 > $num2) ? $num1 : $num2;
    $numMayor = ($numMayor > $num3) ? $numMayor : $num3;

    echo "El mayor número es:", "<b>", $numMayor, "</b>";
    ?>
    <br>
    <h2>Ejercicio 2</h2>
    <?php
    //Gracias Robert <3
    const NUMERO_FILAS = 4;
    for ($i = 1; $i <= NUMERO_FILAS; $i++) {
        for ($j = 1; $j <= NUMERO_FILAS; $j++) {
            echo "*";
            if ($j == $i) {
                echo "<br>";
                break;
            }
        }
    }
    ?>
    <br>
    <h2>Ejercicio 3</h2>
    <?php
    //Empleo la constante creada previamente
    $númeroActual = 1;

    for ($i = 1; $i <= NUMERO_FILAS; $i++) {
        for ($j = 1; $j <= NUMERO_FILAS; $j++) {
            echo $númeroActual, "  ";
            $númeroActual++;
            if ($j == $i) {
                echo "<br>";
                break;
            }
        }
    }
    ?>
    <br>
    <h2>Ejercicio 4</h2>
    <?php
    $factor1 = 7; //Valor que dará nombre a la tabla

    for ($factor2 = 0; $factor2 <= 10; $factor2++) {
        $resultado = $factor1 * $factor2;
        echo $factor1, "x", $factor2, "=", $resultado, "<br>";
    }
    ?>
    <br>
    <h2>Ejercicio 5</h2>
    <?php
    const MÁXIMO = 100;
    $sumaNúmeros = 0;
    for ($i = 1; $i <= MÁXIMO; $i++) {
        if ($i % 10 != 3) {
            $sumaNúmeros = $sumaNúmeros + $i;
        }
    }
    echo "Resultado: ", $sumaNúmeros, "<br>";
    ?>
    <br>
    <h2>Ejercicio 6</h2>
    <?php
    $númCéntimos = 78696;
    if ($númCéntimos < 0) {
        echo "ERROR: Número introducido no válido";
    } else {
        echo "Billetes de 100 euros: ", intdiv($númCéntimos, 10000), "<br>";
        $númCéntimos = $númCéntimos % 10000;
        echo "Billetes de 50 euros: ", intdiv($númCéntimos, 5000), "<br>";
        $númCéntimos = $númCéntimos % 5000;
        echo "Billetes de 20 euros: ", intdiv($númCéntimos, 2000), "<br>";
        $númCéntimos = $númCéntimos % 2000;
        echo "Billetes de 10 euros: ", intdiv($númCéntimos, 1000), "<br>";
        $númCéntimos = $númCéntimos % 1000;
        echo "Billetes de 5 euros: ", intdiv($númCéntimos, 500), "<br>";
        $númCéntimos = $númCéntimos % 500;
        echo "Monedas de 2 euros: ", intdiv($númCéntimos, 200), "<br>";
        $númCéntimos = $númCéntimos % 200;
        echo "Monedas de 1 euro: ", intdiv($númCéntimos, 100), "<br>";
        $númCéntimos = $númCéntimos % 100;
        echo "Monedas de 50 céntimos: ", intdiv($númCéntimos, 50), "<br>";
        $númCéntimos = $númCéntimos % 50;
        echo "Monedas de 20 céntimos: ", intdiv($númCéntimos, 20), "<br>";
        $númCéntimos = $númCéntimos % 20;
        echo "Monedas de 10 céntimos: ", intdiv($númCéntimos, 10), "<br>";
        $númCéntimos = $númCéntimos % 10;
        echo "Monedas de 5 céntimos: ", intdiv($númCéntimos, 5), "<br>";
        $númCéntimos = $númCéntimos % 5;
        echo "Monedas de 2 céntimos: ", intdiv($númCéntimos, 2), "<br>";
        $númCéntimos = $númCéntimos % 2;
        echo "Monedas de 1 céntimos: ", intdiv($númCéntimos, 1), "<br>";
        $númCéntimos = $númCéntimos % 1;
    }
    ?>
    <br>
    <h2>Ejercicio 7</h2>
    <?php
    $jugador1 = "Tijeras";
    $jugador2 = "Piedra";
    if ($jugador1 == "Piedra" || $jugador1 == "Papel" || $jugador1 == "Tijeras") {
        if ($jugador2 == "Piedra" || $jugador2 == "Papel" || $jugador2 == "Tijeras") {
            switch ($jugador1) {
                case "Piedra":
                    if ($jugador2 == "Papel") {
                        echo ("Gana el jugador 2 <br>");
                    } else if ($jugador2 == "Tijeras") {
                        echo ("Gana el jugador 1 <br>");
                    } else {
                        echo ("Empate <br>");
                    }
                    break;
                case "Papel":
                    if ($jugador2 == "Tijeras") {
                        echo ("Gana el jugador 2 <br>");
                    } else if ($jugador2 == "Piedra") {
                        echo ("Gana el jugador 1 <br>");
                    } else {
                        echo ("Empate <br>");
                    }
                    break;
                case "Tijeras":
                    if ($jugador2 == "Piedra") {
                        echo ("Gana el jugador 2 <br>");
                    } else if ($jugador2 == "Papel") {
                        echo ("Gana el jugador 1 <br>");
                    } else {
                        echo ("Empate <br>");
                    }
                    break;
            }
        } else {
            echo ("Error: El jugador 2 ha hecho trampas");
        }
    } else {
        echo ("Error: El jugador 1 ha hecho trampas");
    }
    ?>
    <br>
    <h2>Ejercicio 8</h2>
    <?php
    $cantidadColillasInicial = 7;
    $cantidadColillas = $cantidadColillasInicial;
    $cigarrillosCompletos = 0;
    for ($i = 1; $i <= $cantidadColillas; $i++) {
        if ($i % 7 != 0) {
            continue;
        } else {
            $cigarrillosCompletos++;
            $cantidadColillas = $cantidadColillas - 7 + 1;
            $i = 1;
        }
    }
    echo "Con ", $cantidadColillasInicial, " colillas, se han fumado ", $cigarrillosCompletos, " cigarrillos y han sobrado ", $cantidadColillas, " colilla"
    ?>
    <br>
    <h2>Ejercicio 9</h2>
    <?php
    $núm1 = 10;
    $núm2 = 7;
    $núm3 = -3;
    $nummax = $num1;
    $maximos = 1;

    if ($nummax <= $núm2) {
        if ($nummax == $núm2) {
            $maximos++;
        } else {
            $nummax = $núm2;
            $maximos = 1;
        }
    }
    if ($nummax <= $núm3) {
        if ($nummax == $núm3) {
            $maximos++;
        } else {
            $nummax = $núm3;
            $maximos = 1;
        }
    }
    echo "El máximo es $nummax y aparece $maximos veces"
    ?>
    <br>
    <h2>Ejercicio 10</h2>
    <?php
    $lado1 = 10;
    $lado2 = 10;
    $lado3 = 10;

    $ladosIguales;

    if ($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado1) {
        $ladosIguales = 3;
    } else if ($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1) {
        $ladosIguales = 2;
    } else {
        $ladosIguales = 0;
    }

    switch ($ladosIguales) {
        case 0:
            echo "El triángulo introducido es escaleno";
            break;
        case 2:
            echo "El triángulo introducido es isósceles";
            break;
        case 3:
            echo "El triángulo introducido es equilátero";
            break;
    }
    ?>
    <br>
    <h2>Ejercicio 11</h2>
    <?php
    $númeroIntroducido = 15;
    $factorial = 1;

    if ($númeroIntroducido != 0) {
        for ($i = $númeroIntroducido; $i >= 1; $i--) {
            $factorial *= $i;
        }
    } else {
        echo "Factorial de 0: 1";
    }
    echo "Factorial de ", $númeroIntroducido, ": <b>", $factorial, "</b>";
    ?>
    <br>
    <h2>Ejercicio 12</h2>
    <?php
    $valorIntroducido = 17;
    $esPrimo = true;
    for ($i = 1; $i <= $valorIntroducido; $i++) {
        if ($valorIntroducido % $i == 0 && $i != 1 && $i != $valorIntroducido) {
            $esPrimo = false;
            break;
        }
    }
    switch ($esPrimo) {
        case true:
            echo "El valor introducido es primo";
            break;
        case false:
            echo "El valor introducido no es primo";
            break;
    }
    ?>
    <br>
    <h2>Ejercicio 13</h2>
    <?php
    $dígitoIntroducido = 111;

    $centenas = intdiv($dígitoIntroducido, 100);
    $unidadestemp = $dígitoIntroducido % 100;
    $unidades = $unidadestemp % 10;

    if ($unidades == $centenas) {
        echo "El valor introducido: <b>", $dígitoIntroducido, "</b> es capicua";
    } else {
        echo "El valor introducido: <b>", $dígitoIntroducido, "</b> NO es capicua";
    }
    ?>
    <br>
    <h2>Ejercicio 14</h2>
    <?php
    $resultadoAnterior = 1;
    echo $resultadoAnterior, "<br>";
    for ($i = 2; $i <= 10; $i++) {
        $resultado = $resultadoAnterior + $i;
        $resultadoAnterior = $resultado;
        echo $resultadoAnterior, "<br>";
    }
    ?>
    <br>
    <h2>Ejercicio 15</h2>
    <?php
    $diaNac = 10;
    $mesNac = 7;
    $añoNac = 2001;

    $preSuma = $diaNac + $mesNac + $añoNac;
    $digito1 = intdiv($preSuma, 1000);
    $preSuma = $preSuma % 1000;
    $digito2 = intdiv($preSuma, 100);
    $preSuma = $preSuma % 100;
    $digito3 = intdiv($preSuma, 10);
    $preSuma = $preSuma % 10;
    $digito4 = $preSuma;

    $preSuma2 = $digito1 + $digito2 + $digito3 + $digito4;

    $digito1 = intdiv($preSuma2, 10);
    $digito2 = $preSuma2 % 10;

    $suma = $digito1 + $digito2;
    echo $suma;

    ?>
</body>

</html>