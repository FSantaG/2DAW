<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <?php
        session_start();
        $numAleatorio = rand(1,10);
        $_SESSION["numero"]=$numAleatorio;
    ?>
    <h1>¡Juega y consigue tu premio!</h1>
    <form method="post" action="./pagina2.php">
        <input type="submit" name="comenzar" value="Seguir"/>
    </form>
</body>
</html>