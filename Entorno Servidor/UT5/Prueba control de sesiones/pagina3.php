<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION["numero"]%2==0 && $_SESSION["respuesta"] == "Navidad"){
           echo "<h1>¡Lo lograste!</h1>".
           "Puedes recoger tu premio. Lo encotnrarás bajo el árbol de Navidad de la entrada al Centro (pone para 2.º DAW)"."</br>".
            "<h2>¡FELIZ NAVIDAD!</h2>";
        }
        echo $_SESSION["numero"];
    ?>
</body>
</html>