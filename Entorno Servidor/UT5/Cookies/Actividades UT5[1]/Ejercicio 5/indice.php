<?php
    if(isset($_COOKIE["daw"])){
        header("location: ./daw.php");
    } else if(isset($_COOKIE["dam"])){
        header("location: ./dam.php");
    }else if(isset($_COOKIE["asir"])){
        header("location: ./asir.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="./daw.php">DAW</a></td>
        </tr>
        <tr>
            <td><a href="./asir.php">ASIR</a></td>
        </tr>
        <tr>
            <td><a href="./dam.php">DAM</a></td>
        </tr>
    </table>
</body>
</html>