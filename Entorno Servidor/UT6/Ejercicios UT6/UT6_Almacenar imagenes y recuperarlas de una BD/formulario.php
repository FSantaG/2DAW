<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!--Formulario-->
    <br><br><br>
    <table border=1 align="center" bgcolor="#DOF5A9">
        <form action="datosimg.php" method="post" enctype="multipart/form-data"><!--Enctype necesario para trabajar con archivos-->
            <tr><td>Denominación</td><td><input type="text" name="texto_id"/></td></td></tr>
            <tr><td>Imagen: </td><td><input type="file" name="imagen1" size="20"></td></tr>
            <tr><td colspan="2"><input type="submit" name="Subir imagen"></td></tr>
        </form>
    </table>
</body>
</html>