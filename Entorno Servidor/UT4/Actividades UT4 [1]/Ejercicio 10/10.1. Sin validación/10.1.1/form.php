<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar caracteres</title>
</head>
<body>
    <form action="busqueda.php" target="_blank" method="post">
        <label>
            Inserte un nombre: <input type="text" name="nombre"/>
        </label>
        <label>
            ¿Letra a buscar? <input type="text" name="letra" maxlength="1"/>
        </label>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>