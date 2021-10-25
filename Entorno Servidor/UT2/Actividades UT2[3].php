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
        $num=8;
        $suma=$num+$dat;
        echo $num,"+",$dat,"=",$suma;
    ?>
    <br>
    <h1>Ejercicio 2 </h1>
    <?php
        include_once('datos.inc');
        $num=6;
        $suma=$num+$dat;
        if($suma<0){
            exit();
        }else{
            echo $num,"+",$dat,"=",$suma;
        }
    ?>
    <br>
    <h1>Ejercicio 3 </h1>
    <?php
    echo "<b>ARRAY BASE</b>: <br>";
    $array = array(-1,-2,5,-7,4);
    foreach ($array as $valor){
        echo "$valor <br>";
    }
        
    //caso a
    echo "<b>ARRAY ORDENADO</b>: <br>";
    $arrayordenado=array();
    foreach($array as $valor){
        $arrayordenado[]=$valor;
    }
    sort($arrayordenado, SORT_NUMERIC);
    foreach ($arrayordenado as $valor){
        echo "$valor <br>";
    }

    //caso b
    $busqueda=5;
    echo "<b>POSICIÓN DEL VALOR $busqueda</b>: <br>";
    echo array_search($busqueda, $array), "<br>";

    //caso c
    echo "<b>ARRAY CUYO ÚLTIMO VALOR FUE ELIMINADO</b>: <br>";
    $arrayeliminado=array();
    foreach($array as $valor){
        $arrayeliminado[]=$valor;
    }
    array_pop($arrayeliminado);
    foreach ($arrayeliminado as $valor){
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
    function tablam1($num){
        $texto='';
        $cont=1;
        while($cont<=10){
            $fila=(float) $num." x $cont =".(float)($num*$cont)."<br>";
            echo $fila;
            $cont++;
        }
    }
    
    $num="8.25";
    echo tablam1($num);
    echo "<br>";
    //caso b.
    function tablam2($num){
        $texto='';
        $cont=1;
        while($cont<=10){
            $fila=(float) $num." x $cont =".(float)($num*$cont)."<br>";
            $texto.=$fila;
            $cont++;
        }
        return $texto;
    }
    

    $num="8.25";
    echo tablam2($num);
    echo "<br>";
    //caso c
    function tablam3($num, &$res){
        $texto='';
        $cont=1;
        while($cont<=10){
            $fila=(float) $num." x $cont =".(float)($num*$cont)."<br>";
            $texto.=$fila;
            $cont++;
        }
        return $texto;
    }

    $num="8.25";
    $res="";
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

    ?>
    <br>
    <h1>Ejercicio 19 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 20 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 21 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 22 </h1>
    <?php

    ?>
    <br>
    <h1>Ejercicio 23 </h1>
    <?php
    //caso a
    function tirarDado1(){
        $dado=rand(1,6);
        if($dado==6){
            echo "¡Felicidades! ¡Has obtenido $dado!";
        }else{
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    }

    tirarDado1();
    echo "<br>";
    
    //caso b
    function tirarDado2(){
        $dado=rand(1,6);
        if($dado==6){
            echo "¡Felicidades! ¡Has obtenido $dado!";
        }else{
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    }

    $juego='tirarDado2';
    $juego();
    echo "<br>";

    //caso c
    $tirarDado3 = function(){
        $dado=rand(1,6);
        if($dado==6){
            echo "¡Felicidades! ¡Has obtenido $dado!";
        }else{
            echo "Has obtenido $dado. Intentelo de nuevo reiniciando el script";
        }
    };
    function jugar($tirarDado3){
        $tirarDado3();
    }
    jugar($tirarDado3);
    ?>
    <br>
</body>
</html>