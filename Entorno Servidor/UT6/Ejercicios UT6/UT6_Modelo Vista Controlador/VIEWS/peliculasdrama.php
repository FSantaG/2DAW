<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelis</title>
</head>
<body>
    <h1>PELICULAS DRAMA</h1>
    <?php
        for($i=0;$i<count($datos);$i++){
            echo "<br>".$datos[$i]."<br>";
        }
    ?>
</body>
</html>