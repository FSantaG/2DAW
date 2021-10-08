<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
        //Parte 1 `+ parte 2 (Array + número de comps + media)
        $num = array(-1,-2,5,-7,4);
        $media=0;
        for($i=0;$i<count($num);$i++){
            if($num[$i]<0){
                echo $num[$i];
                $media+=$num[$i];
            }
        }
        $media/=count($num);
        echo $media;
        //Parte 3: Visualizar posiciones en las que se almacene el cuadrado del valor que ocupan
        $situación=false;
        for($i=0;$i<count($num);$i++){
            if($num[$i]==$i^2){
                $situación=true;
                echo $i;
            }
            if($situación){
                echo "No se cumplen los requisitos";
            }
        }
        //Parte 4: Invertir el array
        for($i=count($num);$i>0;$i--){
            if($num[$i]<0){
                echo $num[$i];
            }
        }
        //Parte 5: Crear nuevo array cuyos valores sean el doble del primero
        for($i=0;$i<count($num);$i++){
            $num2[$i]=$num[$i]*2;
        }
        //Parte 6: Añadir 2 nuevas componentes al array inicial
        $num[]=19;
        $num[]=-5;
        for($i=0;$i<count($num);$i++){
            if($num[$i]<0){
                echo $num[$i];
                $media+=$num[$i];
            }
        }
    ?>
    <br>
    <h2>Ejercicio 2</h2>
    <?php
        $lectivos=array("otoño"=>60, "invierto"=>51, "primavera"=>57, "verano"=>7);

        $menosdias=300;
        foreach($lectivos as $clave => $valor){
            if($valor < $menosdias){
                $menosdias=$valor;
                $estmenoslectiva=$clave;
            }
        }
        echo "La estación menos lectiva es $estmenoslectiva y tiene $menosdias dias lectivos";
    ?>
    <br>
    <h2>Ejercicio 3</h2>
    <?php
    
    ?>
</body>
</html>