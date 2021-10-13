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
        $alumno = array('Nombre'=>"Manolo", 'Edad'=>18, "Calificación"=>7);
        foreach($alumno as $clave=>$valor){
            echo "$clave=>$valor<br>";
        }
    ?>
    <br>
    <h2>Ejercicio 3</h2>
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
    <h2>Ejercicio 4</h2>
    <?php
        //Creación y visualización de la matriz
        $tabla=array(array(0,1),array(1,0));
        for($i=0;$i<count($tabla);$i++){
            for($j=0;$j<count($tabla[$i]);$j++){
                echo $tabla[$i][$j]," ";          
            }
            echo "<br>";
        }
        //Tratamiento Matriz identidad

        $identidad=true;
        for($i=0;$i<count($tabla) && $identidad;$i++){
            for($j=0;$j<count($tabla[$i]) && $identidad;$j++){
                if($i==$j && $tabla[$i][$j]!=1){
                    $identidad=false;
                }else if ($i!=$j && $tabla[$i][$j]!=0){
                    $identidad=false;
                }
            }
        }
        if($identidad){
            echo "La matriz es identidad";
        }else{
            echo "La matriz no es identidad";
        }
    ?>
    <br>
    <h2>Ejercicio 5</h2>
    <?php
        $tabla=array(array(-8,1,4),array(1,7,4),array(3,4,9));
        
        for($i=0;$i<count($tabla);$i++){
            for($j=0;$j<count($tabla[$i]);$j++){
                echo $tabla[$i][$j]," ";
            }
            echo "<br>";
        }

        $simétrica=true;
        for($i=0;$i<count($tabla) && $simétrica;$i++){
            for($j=0;$j<count($tabla[$i]) && $simétrica;$j++){
                if($tabla[$i][$j]!=$tabla[$j][$i]){
                    $simétrica=false;
                }
            }
        }
        if($simétrica==true){
            echo "La matriz es simétrica";
        }else{
            echo "La matriz no es simétrica";
        }
        echo "<br>";
        
        $suma=0;
        $matriz=array();
            for($j=0;$j<count($tabla[$i]);$j++){
                for($i=0;$i<=2;$i++){
                    $suma+=$tabla[$i][$j];
                }
                $matriz[]=$suma;
                $suma=0;
                $i=0;
            }
        echo "Array suma: <br>";
        for($i=0;$i<count($matriz);$i++){
            echo $matriz[$i],"<br>";
        }

        $búsqueda = 9;
        $mensaje = "El número $búsqueda se encuentra en las coordenadas ";
        for($i=0;$i<count($tabla);$i++){
            for($j=0;$j<count($tabla[$i]);$j++){
                if($tabla[$i][$j]==$búsqueda){
                    $coordx=$i+1;
                    $coordy=$j+1;
                }
            }
        }
        echo "Valor: ", $búsqueda,
        "<br>",
        "Ubicación: (",$coordx,",",$coordy,") <br>";
    ?>
    <br>
    <h2>Ejercicio 6</h2>
    <?php
    
    ?>
    <br>
    <h2>Ejercicio 7</h2>
    <?php
    
    ?>
    <br>
    <h2>Ejercicio 8</h2>
    <?php
    
    ?>
    <br>
    <h2>Ejercicio 9</h2>
    <?php
    
    ?>
    <br>
    <h2>Ejercicio 10</h2>
    <?php
    
    ?>
    <br>
    <h2>Ejercicio 11</h2>
    <?php
    
    ?>
</body>
</html>