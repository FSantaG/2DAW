<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulario</title>
    </head>
    <body>
        <!--Código perteneciente a este formulario no operativo-->
        <form method="post" action="005b_consultas_parametrizadas.php">
            <label for='id_al'>Id: </label>
            <input type='number' name='id_al' min='10'/>
            <br>
            <label for='nombre'>Nombre: </label>
            <input type='text' name='nombre'/>
            <br>
            <label for='edad'> Edad: </label>
            <input type='text' name='edad'/>
            <br>
            <label for='id_curso'>Curso: </label>
            <select name='id_curso'>
                <option value='1'>1</option>
                <option value='2'>2</option>
            </select>
            <br>
            <input type='submit' name='agregado' value='Agregar'/>
        </form>
    </body>
    </html>