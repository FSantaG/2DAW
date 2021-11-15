<?php
    $modulo = "DWES";
    $curso = "2º DAW";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>

<body>
    <h1>Incluir enlaces con información en ellos</h1>
    
    <a href="./pagina12.php?data[modulo]=<?php echo ($modulo);?>&data[curso]=<?php echo($curso);?>">Pulse aquí </a>
</body>

</html>