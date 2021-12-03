<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de errores</title>
</head>
<body>
    <?php
    //Redefinir una constante dentro de un script --> Notice
    /* define("Hola", "Hola");
    define("Hola", "Adios"); */

    //Utilizar una constante no definida --> Warning
    /* echo HOLA; */

    //No encerrar entre comillas las claves de un array asociativo --> Warning y Notice
    /* $array = array("Uno" => "España", "Dos" => "Inglaterra");
    echo ($array[uno]); */
    
    //Acceder a una componente de un arrat indexado fuera de su rango --> Notice
    /* $array = array("1", "2", "3");
    echo $array[3]; */

    // Estas líneas --> Deprecated (?)
    /* $num=5;
    var_dump((unset)$num); */

    //Utilizar la función count para calcular la longitud de un string --> Warning
    /* $texto = "Me pican las bolas";
    echo count($texto); */

    //Incluye en un script la función mktime, sin parámetros para obtener el time unix actual --> Deprecated
    /* echo (mktime()); */
    ?>
</body>
</html>