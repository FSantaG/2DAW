<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <form action="./pagina3.php" method="post">
        Escribe la palabra mágica... <input type="text" name="respuesta"/></br>
        <input type="submit" name="seguir2" value="Seguir"/> 
    </form>
    <?php
        session_start();
        $_SESSION["respuesta"]=$_POST("respuesta");
    ?>
</body>
</html>