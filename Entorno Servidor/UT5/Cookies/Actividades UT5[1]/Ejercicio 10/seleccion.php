<?php
    if(!isset($_COOKIE["resumen"])){
        $item = $_POST["producto"];
        $unidades = $_POST["unidades"];
        $productos = [$item, $unidades];
        setcookie("resumen", json_encode($productos), time()+60);
    }else{
        $item = $_POST["producto"];
        $unidades = $_POST["unidades"];
        $productos = [$item, $unidades];
        $cookieArray = json_decode($_COOKIE["resumen"]);
        $arrayResumen = array_merge($cookieArray, $productos);
        setcookie("resumen", json_encode($arrayResumen), time()+60);
        //echo $_COOKIE["resumen"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet"href="estilos.css"/>
</head>
<body>
    <a href="resumen.php">Pagar</a>
    <a href="form.php">Realizar otra compra</a>
    <a href="finApp.php">Salir</a>
</body>
</html>