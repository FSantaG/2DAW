<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form method="post" action="./fin.php">
        <fieldset>
            Indique si ha finalizado el test:</br>
            <input type="radio" name="test" value="si"/>Realizado</br>
            <input type="radio" name="test" value="no" checked/>No realizado</br>
        </fieldset>
        <fieldset>
            Indique si ha finalizado el examen:</br>
            <input type="radio" name="examen" value="si"/>Realizado</br>
            <input type="radio" name="examen" value="no" checked/>No realizado</br>
        </fieldset>
        <input type="submit" name="envío" value="Enviar"/>
    </form>
</body>
</html>