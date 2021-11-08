<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con método GET</title>
</head>

<body>
    <form action="respuesta.php" method="get">
        <fieldset>
            <legend>PREGUNTA</legend>
            <label name="pregunta">
                ¿De qué color es el caballo blanco de Santiago?
                <input type="text" name="respuesta" value="" />
            </label>
        </fieldset>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>