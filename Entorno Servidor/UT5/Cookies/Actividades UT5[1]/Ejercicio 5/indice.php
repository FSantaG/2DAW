<?php
/*Es más bonito con un switch, y así te ahorras el crear 3 cookies diferentes :D*/
    if(isset($_COOKIE["ciclo"])){
        switch($_COOKIE["ciclo"]){
            case "daw":
                header("location: ./daw.php");
                break;
            case "dam":
                header("location: ./dam.php");
                break;
            case "asir":
                header("location: ./asir.php");
                break;
        }   
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