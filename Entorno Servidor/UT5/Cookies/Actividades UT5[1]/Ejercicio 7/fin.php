<?php
    session_start();
    if(isset($_POST["test"])){
        if($_POST["test"] == "si"){
            setcookie("test", "realizado", time()+30);
        }else{
            setcookie("test", "norealizado", time()+30);
        }
    }
    if(isset($_POST["examen"])){
        if($_POST["examen"]=="si"){
            setcookie("examen", "realizado", time()+30);
        }else{
            setcookie("examen", "norealizado", time()+30);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin</title>
</head>
<body>
    Fin de la aplicación
</body>
</html>
