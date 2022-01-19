<?php
    $datosLista = json_decode($_COOKIE['resumen']);
    $contador = 1;
    $preciototal = 0;
    $precio = 0;
    unset($_COOKIE['resumen']);
    //echo count($data);
    foreach($datosLista as $dato){
        //TODO
        //Hacer la cosa de mierda para comprobar los precios
        if($contador==1){
            $producto = mb_strtolower($dato);
            echo "Producto: ".$producto." ";
            if($producto == "manzanas"){
                $precio = 1.80;
            }else if($producto == "peras"){
                $precio = 1.40;
            }else if($producto == "plátanos"){
                $precio = 1.50;
            }
            $contador++;
        }else{
            $cantidad = $dato;
            echo "Cantidad: ".$cantidad." Precio: ".$precio*$cantidad."<br/>";
            $preciototal += $precio*$cantidad;
            $contador=1;
        }
    }
    echo "Total a pagar: ".$preciototal."<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja registradora</title>
</head>
<body>
    
</body>
</html>