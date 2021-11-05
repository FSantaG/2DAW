<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades 3</title>
</head>

<body>
    <h1>Ejercicio 1 </h1>
    <?php
    include_once('datos.inc');
    $num = 8;
    $suma = $num + $dat;
    echo $num, "+", $dat, "=", $suma;
    ?>
    <br>
    <h1>Ejercicio 2 </h1>
    <?php
    include_once('datos.inc');
    $num = 6;
    $suma = $num + $dat;
    if ($suma < 0) {
        exit();
    } else {
        echo $num, "+", $dat, "=", $suma;
    }
    ?>
    <br>
    <h1>Ejercicio 3 </h1>
    <?php
    echo "<b>ARRAY BASE</b>: <br>";
    $array = array(-1, -2, 5, -7, 4);
    foreach ($array as $valor) {
        echo "$valor <br>";
    }

    //caso a
    echo "<b>ARRAY ORDENADO</b>: <br>";
    $arrayordenado = array();
    foreach ($array as $valor) {
        $arrayordenado[] = $valor;
    }
    sort($arrayordenado, SORT_NUMERIC);
    foreach ($arrayordenado as $valor) {
        echo "$valor <br>";
    }

    //caso b
    $busqueda = 5;
    echo "<b>POSICIÓN DEL VALOR $busqueda</b>: <br>";
    echo array_search($busqueda, $array), "<br>";

    //caso c
    echo "<b>ARRAY CUYO ÚLTIMO VALOR FUE ELIMINADO</b>: <br>";
    $arrayeliminado = array();
    foreach ($array as $valor) {
        $arrayeliminado[] = $valor;
    }
    array_pop($arrayeliminado);
    foreach ($arrayeliminado as $valor) {
        echo "$valor <br>";
    }
    ?>
    <br>
    <h1>Ejercicio 4 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 5 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 6 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 7 </h1>
    <?php
    //parte a
    function tablam1($num)
    {
        $texto = '';
        $cont = 1;
        while ($cont <= 10) {
            $fila = (float) $num . " x $cont =" . (float)($num * $cont) . "<br>";
            echo $fila;
            $cont++;
        }
    }

    $num = "8.25";
    echo tablam1($num);
    echo "<br>";
    //caso b.
    function tablam2($num)
    {
        $texto = '';
        $cont = 1;
        while ($cont <= 10) {
            $fila = (float) $num . " x $cont =" . (float)($num * $cont) . "<br>";
            $texto .= $fila;
            $cont++;
        }
        return $texto;
    }


    $num = "8.25";
    echo tablam2($num);
    echo "<br>";
    //caso c
    function tablam3($num, &$res)
    {
        $texto = '';
        $cont = 1;
        while ($cont <= 10) {
            $fila = (float) $num . " x $cont =" . (float)($num * $cont) . "<br>";
            $texto .= $fila;
            $cont++;
        }
        return $texto;
    }

    $num = "8.25";
    $res = "";
    echo tablam3($num, $res);
    echo $res;
    ?>
    <br>
    <h1>Ejercicio 8 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 9 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 10 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 11 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 12 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 13 </h1>
    <?php
    function traducir($frase_traducir)
    {
        $palabra_sin_primera_letra = "";
        $primera_letra = "";
        $frase_traducida = "";
        $frase_array = explode(" ", $frase_traducir);

        foreach ($frase_array as $frase) {
            $primera_letra = $frase[0];
            $palabra_sin_primera_letra = substr($frase, 1);
            $frase_traducida .= $palabra_sin_primera_letra . $primera_letra . "um ";
        }
        return $frase_traducida;
    }
    $frase = "una imagen vale más que mil palabras";
    echo "'$frase' en macarrónico es: <b>", traducir($frase), "</b>";
    ?>
    <br>
    <h1>Ejercicio 14 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 15 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 16 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 17 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 18 </h1>
    <?php
    function calcularEdad($año, $mesNac, $diaNac)
    {
        $segundosUnix = mktime(0, 0, 0, $mesNac, $diaNac, $año);
        $segundosV = time() - $segundosUnix;
        $edad = $segundosV / 60 / 60 / 24 / 365.25;
        echo "Edad: ", (int)$edad, " años.";
    }
    calcularEdad(2004, 3, 15);
    ?>
    <br>
    <h1>Ejercicio 19 </h1>
    <?php
    function dias_navidad()
    {
        date_default_timezone_set("Europe/Madrid");
        $navidad = mktime(0, 0, 0, 12, 25, date("y"));
        $hoy = mktime(0, 0, 0, date("m"), date("d"), date("y"));
        $dif = ($navidad - $hoy);
        if ($dif % 86400 != 0) {
            $dias = (int)($dif / 86400) + 1;
        } else {
            $dias = (int)($dif / 86400);
        }
        echo "Quedan $dias días para Navidad";
    }

    dias_navidad();

    ?>
    <br>
    <h1>Ejercicio 20 </h1>
    <?php
    function caducar(&$farma)
    {
        for ($i = 0; $i < count($farma); $i++) {
            $f_unix = strtotime($farma[$i][1]);
            $hoy = mktime(0, 0, 0, date("m"), date("d"), date("y"));
            $caducado = $hoy - $f_unix;
            var_dump($i);
            var_dump($caducado);
            if ($caducado > 0) {
                echo $farma[$i][0], " está caducado. <br>";
                unset($farma[$i]);
            }
        }
    }

    $farmacia = array(
        array("ibuprofeno", "4-2021"),
        array("flutox", "7-2019"),
        array("betadine", "12-2019"),
        array("fenergan", "5-2022"),
        array("termalgin", "8-2022")
    );
    var_dump($farmacia);
    caducar($farmacia);
    var_dump($farmacia);
    ?>
    <br>
    <h1>Ejercicio 21 </h1>
    <?php
    //Caso 1: Da error
    //Caso 2: Devuelve 1 porque se declara como global la variable var1 
    //(Es mejor apsarla como parámetro)
    //Caso 3: Devuelve primero un 2 y luego un 3
    //Caso 4: En la primera rotación devuelve var2(2) y var3(11).
    //Al vovlerlo a pasar, var2 se modifica porque var3 es estática, y mantiene el 11, pasando a 22, y
    //asignando a var2 el valor 23.
    //Caso 5: Devuelve $p = 2, aunque no modifica var1.
    //Caso 6: Se muesta 11 porque se crea una variable var2 global
    //Caso 7: Al ser un paso por referencia, la variable var1 pasada como parámetro
    //de la función se modifica globalmente, por lo que al llamar a la variable, se mostrará un 2.
    //Caso 8: Sería 150
    ?>
    <br>
    <h1>Ejercicio 22 </h1>
    <?php
    //Función convencional de usuario
    function función_clásica($cadenas, $subcad = 'ma')
    {
        $cont = 0;
        $ok = false;
        $n = func_num_args();
        if ($n == 2) {
            $ok = true;
        }
        for ($i = 0; $i < count($cadenas); $i++) {
            if (stripos($cadenas[$i], $subcad) !== false) {
                $cont++;
            }
        }
        if ($ok) {
            echo "La subcadena '$subcad' aparece $cont veces en el array de string <br>";
        } else {
            echo "No se pasó ninguna subcadena. La subcadena 'ma' aparece $cont veces en el string <br>";
        }
    }
    echo "USANDO UNA FUNCIÓN CLÁSICA <br>";
    $palabras = array("lunes", "martes", "miercoles");
    función_clásica($palabras, "ES");
    echo "<br>";
    función_clásica($palabras, "s");
    echo "<br>";
    función_clásica($palabras);
    echo "<br>";

    //Variable de función
    echo "USANDO UNA VARIABLE DE FUNCIÓN <br>";
    $var_func = 'función_clásica';
    $var_func($palabras);
    echo ("<br>");
    $var_func($palabras, "s");
    echo ("<br>");

    //funcion anónima y callback
    echo "USANDO UNA VARIABLE CALLBACK <br>";
    $var2_func = function ($cadenas, $subcad = "ma") {
        $cont = 0;
        $ok = false;
        $n = func_num_args();
        if ($n == 2) {
            $ok = true;
        }
        for ($i = 0; $i < count($cadenas); $i++) {
            if (stripos($cadenas[$i], $subcad) !== false) {
                $cont++;
            }
        }
        if ($ok) {
            echo "La subcadena '$subcad' aparece $cont veces en el array de string <br>";
        } else {
            echo "No se pasó ninguna subcadena. La subcadena 'ma' aparece $cont veces en el string <br>";
        }
    };

    //Es necesario el ; pues de trata de una sentencia de asignación.

    function probar($var)
    {
        $palabras = array("lunes", "martes", "miercoles");
        $var($palabras);
        echo "<br>";
        $var($palabras, "r");
    }

    probar($var2_func);
    ?>
    <br>
    <h1>Ejercicio 23 </h1>
    <?php
    //caso a
    function tirarDado1()
    {
        $dado = rand(1, 6);
        if ($dado == 6) {
            echo "¡Felicidades! ¡Has obtenido $dado!";
        } else {
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    }

    tirarDado1();
    echo "<br>";

    //caso b
    function tirarDado2()
    {
        $dado = rand(1, 6);
        if ($dado == 6) {
            echo "¡Felicidades! ¡Has obtenido $dado!";
        } else {
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    }

    $juego = 'tirarDado2';
    $juego();
    echo "<br>";

    //caso c
    $tirarDado3 = function () {
        $dado = rand(1, 6);
        if ($dado == 6) {
            echo "¡Felicidades! ¡Has obtenido $dado!";
        } else {
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    };
    function jugar($tirarDado3)
    {
        $tirarDado3();
    }
    jugar($tirarDado3);
    ?>
    <br>
</body>

</html>