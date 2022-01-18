<?php
    $data = json_decode($_COOKIE['resumen']);
    echo count($data);
    foreach($data as $producto){
        //TODO
        //Hacer la cosa de mierda para comprobar los precios
        echo $producto."<br>";
    }
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