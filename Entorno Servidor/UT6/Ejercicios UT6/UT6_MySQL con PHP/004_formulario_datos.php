    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulario</title>
    </head>
    <body>
        <form method="post" action="004b_formulario_operaciones.php">
            <label for='id'>Id: </label>
            <input type='number' name='id' min='10'/>
            <br>
            <label for='nombre'>Nombre: </label>
            <input type='text' name='nombre'/>
            <br>
            <label for='edad'> Edad: </label>
            <input type='text' name='edad'/>
            <br>
            <label for='curso'>Curso: </label>
            <select name='curso'>
                <option value='1'>1</option>
                <option value='2'>2</option>
            </select>
            <br>
            <input type='submit' name='agregado' value='Agregar'/>
            <input type='submit' name='borrado' value='Borrar'/>
            <input type="submit" name="visualizado" value="Ver tabla"/>
        </form>
    </body>
    </html>
