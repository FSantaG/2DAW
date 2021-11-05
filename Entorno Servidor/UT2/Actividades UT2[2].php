<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades [2]</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <?php
    //Parte 1 `+ parte 2 (Array + número de comps + media)
    $num = array(-1, -2, 5, -7, 4);
    $media = 0;
    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] < 0) {
            echo $num[$i];
            $media += $num[$i];
        }
    }
    $media /= count($num);
    echo $media;
    //Parte 3: Visualizar posiciones en las que se almacene el cuadrado del valor que ocupan
    $situación = false;
    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] == $i ^ 2) {
            $situación = true;
            echo $i;
        }
        if ($situación) {
            echo "No se cumplen los requisitos";
        }
    }
    //Parte 4: Invertir el array
    for ($i = count($num); $i > 0; $i--) {
        if ($num[$i] < 0) {
            echo $num[$i];
        }
    }
    //Parte 5: Crear nuevo array cuyos valores sean el doble del primero
    for ($i = 0; $i < count($num); $i++) {
        $num2[$i] = $num[$i] * 2;
    }
    //Parte 6: Añadir 2 nuevas componentes al array inicial
    $num[] = 19;
    $num[] = -5;
    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] < 0) {
            echo $num[$i];
            $media += $num[$i];
        }
    }
    ?>
    <br>
    <h2>Ejercicio 2</h2>
    <?php
    $alumno = array('Nombre' => "Manolo", 'Edad' => 18, "Calificación" => 7);
    foreach ($alumno as $clave => $valor) {
        echo "$clave=>$valor<br>";
    }
    ?>
    <br>
    <h2>Ejercicio 3</h2>
    <?php
    $lectivos = array("otoño" => 60, "invierto" => 51, "primavera" => 57, "verano" => 7);

    $menosdias = 300;
    foreach ($lectivos as $clave => $valor) {
        if ($valor < $menosdias) {
            $menosdias = $valor;
            $estmenoslectiva = $clave;
        }
    }
    echo "La estación menos lectiva es $estmenoslectiva y tiene $menosdias dias lectivos";
    ?>
    <br>
    <h2>Ejercicio 4</h2>
    <?php
    //Creación y visualización de la matriz
    $tabla = array(array(0, 1), array(1, 0));
    for ($i = 0; $i < count($tabla); $i++) {
        for ($j = 0; $j < count($tabla[$i]); $j++) {
            echo $tabla[$i][$j], " ";
        }
        echo "<br>";
    }
    //Tratamiento Matriz identidad

    $identidad = true;
    for ($i = 0; $i < count($tabla) && $identidad; $i++) {
        for ($j = 0; $j < count($tabla[$i]) && $identidad; $j++) {
            if ($i == $j && $tabla[$i][$j] != 1) {
                $identidad = false;
            } else if ($i != $j && $tabla[$i][$j] != 0) {
                $identidad = false;
            }
        }
    }
    if ($identidad) {
        echo "La matriz es identidad";
    } else {
        echo "La matriz no es identidad";
    }
    ?>
    <br>
    <h2>Ejercicio 5</h2>
    <?php
    //Crear y visualizar array 3x3
    $tabla = array(array(2, -3, 5), array(-3, 0, 7), array(5, 7, 1));
    //$tabla=array(array(1,2,3),array(4,5,6),array(7,8,9));
    for ($i = 0; $i < count($tabla); $i++) {
        for ($j = 0; $j < count($tabla[$i]); $j++) {
            echo $tabla[$i][$j], " ";
        }
        echo "<br>";
    }
    //Comprobar que es simétrica
    $simétrica = true;
    for ($i = 0; $i < count($tabla) && $simétrica; $i++) {
        for ($j = 0; $j < count($tabla[$i]) && $simétrica; $j++) {
            if ($tabla[$i][$j] != $tabla[$j][$i]) {
                $simétrica = false;
            }
        }
    }
    if ($simétrica == true) {
        echo "La matriz es simétrica";
    } else {
        echo "La matriz no es simétrica";
    }
    echo "<br>";

    /*Visualización en una matriz unidimensional que guarde la suma
        de sus filas*/
    $sumaFilas = 0;
    $matrizSumFilas = array();
    for ($i = 0; $i < count($tabla); $i++) {
        for ($j = 0; $j < count($tabla); $j++) {
            $sumaFilas += $tabla[$i][$j];
        }
        $matrizSumFilas[$i] = $sumaFilas;
        $sumaFilas = 0;
    }

    echo "Matriz unidimensional resultante de la suma de los valores de las filas: <br>";
    for ($i = 0; $i <= 2; $i++) {
        echo $matrizSumFilas[$i], " ";
    }
    echo "<br>";
    /*Visualización en una matriz unidimensional 
        que guarde la suma de sus columnas*/
    $sumaColumnas = 0;
    $matrizSumColumnas = array();
    for ($j = 0; $j < count($tabla); $j++) {
        for ($i = 0; $i < count($tabla); $i++) {
            $sumaColumnas += $tabla[$i][$j];
        }
        $matrizSumColumnas[$j] = $sumaColumnas;
        $sumaColumnas = 0;
        $i = 0;
    }
    echo "Matriz unidimensional resultante de la suma de los valores de las columnas: <br>";
    for ($i = 0; $i <= 2; $i++) {
        echo $matrizSumColumnas[$i], " ";
    }
    echo "<br>";
    //Buscar un valor en la matriz
    $valor = 5;
    $encontrado = false;
    for ($i = 0; $i < count($tabla); $i++) {
        for ($j = 0; $j < count($tabla[$i]); $j++) {
            if ($tabla[$i][$j] == $valor) {
                $encontrado = true;
                $posicion[$i][] = $fila = $i;
                $col = $j;
                break;
            }
        }
    }
    echo var_dump($posicion);
    ?>
    <br>
    <h2>Ejercicio 6</h2>
    <?php
    $animales = array("Domesticos" => array("Perro", "Gato"), "Salvajes" => array("Lobo", "Zebra", "Jabalí"));
    var_dump($animales);

    foreach ($animales as $clase => $valor) {
        echo $clase, ": ";
        for ($i = 0; $i < count($valor); $i++) {
            echo $valor[$i], " ";
        }
        echo "<br>";
    }
    ?>
    <br>
    <h2>Ejercicio 7</h2>
    <?php

    ?>
    <br>
    <h2>Ejercicio 8</h2>
    <?php
    $oscars = array("Antonio Banderas" => array("Dolor y Gloria", "La piel que habito"), "Brad Pitt" => "Erase una vez...Hollywood", "Laura Darn" => "Historia de un matrimonio");

    foreach ($oscars as $actor => $valor) {
        echo "$actor: ";
        if (is_array($valor)) {
            foreach ($valor as $pelicula) {
                echo "'$pelicula' ";
            }
            echo "<br>";
        } else {
            echo "'$valor' <br>";
        }
    }

    ?>
    <br>
    <h2>Ejercicio 9</h2>
    <?php
    $notas = array(
        "Alumno 1" => array("Matrícula" => 769184, "Notas" => array(5, 8)),
        "Alumno 2" => array("Matrícula" => 717612, "Notas" => array(4, 7)),
        "Alumno 3" => array("Matrícula" => 760391, "Notas" => array(4, 6)),
        "Alumno 4" => array("Matrícula" => 498589, "Notas" => array(8, 3)),
        "Alumno 5" => array("Matrícula" => 608589, "Notas" => array(7, 6))
    );
    $media = 0;
    foreach ($notas as $alumno => $datos) {
        foreach ($datos as $matricula) {
            if (is_array($matricula)) {
                foreach ($matricula as $nota) {
                    $media += (int)($nota);
                }
            } else {
                echo "Media de $matricula: ";
            }
            if ($media != 0) {
                echo $media / 2, "<br>";
                $media = 0;
            }
        }
    }
    $máxMedia = 0;
    $mediaTemp = 0;
    foreach ($notas as $alumno => $datos) {
        foreach ($datos as $matricula) {
            if (is_array($matricula)) {
                foreach ($matricula as $nota) {
                    $mediaTemp += (int)($nota);
                }
                $mediaCalif[] = $mediaTemp / 2;
                $mediaTemp = 0;
            }
        }
    }
    for ($i = 0; $i < count($mediaCalif); $i++) {
        if ($mediaCalif[$i] > $máxMedia) {
            $máxMedia = $mediaCalif[$i];
            $máxAlumno = $i + 1; //El +1 sirve para corresponder el valor de la posición del array con el número del alumno
        }
    }
    $alumnoMáximo = "Alumno $máxAlumno";
    echo "El alumno ", $notas[$alumnoMáximo]["Matrícula"], " tiene la mayor media ($máxMedia)";
    ?>
    <br>
    <h2>Ejercicio 10</h2>
    <?php
    $ciclos = array(
        "ASIR" => array("-18" => 5, "18-22" => 7, "+22" => 3),
        "DAW" => array("-18" => 0, "18-22" => 15, "+22" => 0),
        "DAM" => array("-18" => 20, "18-22" => 0, "+22" => 0),
        "Medio" => array("-18" => 2, "18-22" => 13, "+22" => 0)
    );

    foreach ($ciclos as $modulo => $alumnos) {
        if ($alumnos["-18"] == 0 && $alumnos["+22"] == 0) {
            echo "En el módulo $modulo hay sólo alumnos menores de edad (", $alumnos["18-22"], ") <br>";
        }
    }
    ?>
    <br>
    <h2>Ejercicio 11</h2>
    <?php
    $frase = "";
    $frase2 = "";
    $palindromo = "dabale arroz a la zorra el abad";

    for ($i = 1; $i < strlen($palindromo); $i++) {
        if ($palindromo[strlen($palindromo) - $i] != " ") {
            $frase .= $palindromo[strlen($palindromo) - $i];
        }
        if ($palindromo[$i - 1] != " ") {
            $frase2 .= $palindromo[$i - 1];
        }
    }

    if ($frase == $frase2) {
        echo "True";
    } else {
        echo "False";
    }
    ?>
    <br>
    <h2>Ejercicio 12</h2>
    <?php
    $dni = 71309228;
    $letras = array(
        "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B",
        "N", "J", "Z", "S", "Q", "V",
        "H", "L", "C", "K", "E"
    );
    function calcularLetraDNI($dni)
    {
        return $dni - ((int)($dni / 23) * 23);
    }
    echo $dni . $letras[calcularLetraDNI($dni)];
    ?>
    <br>
    <h2>Ejercicio 13</h2>
    <?php
    $castilla_leon = array(
        "Ávila" => array(9, 5),
        "Burgos" => array(40, 10),
        "León" => array(25, 7),
        "Palencia" => array(6, 0),
        "Salamanca" => array(12, 3),
        "Segovia" => array(9, 5),
        "Soria" => array(18, 18),
        "Valladolid" => array(3, 2),
        "Zamora" => array(13, 0)
    );
    $posicion = 1; //La posición 1 es la que ocupan los hospitalizados en el array
    function calcularHospitalizados($castilla_leon, $posicion)
    {
        $total = 0;
        foreach ($castilla_leon as $clave => $valor) {
            $total += $castilla_leon[$clave][$posicion];
        }
        return $total;
    }

    echo "La cantidad de hospitalizados es: ", calcularHospitalizados($castilla_leon, $posicion);
    ?>
    <br>
    <h2>Ejercicio 14</h2>
    <?php
    $asientos = array(
        "1" => "Libre",
        "2" => "Ocupado",
        "4" => "Libre",
        "3" => "Ocupado",
        "5" => "Ocupado",
        "6" => "Ocupado",
        "8" => "Ocupado",
        "7" => "Ocupado",
        "9" => "Libre",
        "10" => "Ocupado",
        "12" => "Ocupado",
        "11" => "Ocupado",
        "13" => "Libre",
        "14" => "Ocupado",
        "16" => "Libre",
        "15" => "Ocupado",
    );
    $totalAsientosLibres = 0;
    $contador = 0;
    $asiento = "";
    foreach ($asientos as $numero => $estado) {
        if ($estado == "Libre") {
            $contador++;
            $asiento .= "$numero ";
        }
    }
    echo "Hay $contador asientos libres: $asiento";
    ?>
    <br>
    <h2>Ejercicio 15</h2>
    <?php
    $plataformas = array(
        "LAMP" => array("Linux", "Apache", "MySQL", "PHP"),
        "WISA" => array("Windows", "IIS", "SQL Server", "ASP"),
        "WAMP" => array("Windows", "Apache", "MySQL", "PHP"),
        "WIMP" => array("Windows", "IIS", "MySQL", "PHP")
    );
    $mensaje = "";
    foreach ($plataformas as $plataforma => $numComponente) {
        foreach ($numComponente as $componente) {
            if ($componente == "Apache") {
                $mensaje .= "$plataforma ";
            }
        }
    }
    echo "Las plataformas que emplean APACHE son: $mensaje";
    ?>
</body>

</html>