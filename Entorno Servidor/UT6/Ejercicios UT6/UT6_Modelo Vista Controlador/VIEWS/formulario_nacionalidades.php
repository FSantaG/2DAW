<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>owo</title>
</head>
<body>
    <form action="../control/controller_actor.php" method="post">
        <table align="center" border="1">
            <tr>
                <td>Elegir una nacionalidad: <br><br>
                    <select name="nacionalidad">
                    <?php
                        foreach($datos as $clave => $valor)
                            echo "<option value='".$valor."'>".$valor."</option>";
                    ?>
                    </select>
                    <br><br>
                </td>
                <td align="center">
                    <input type="submit" name="continuar" value="Continuar"/>
                </td> 
            </tr>
        </table>
    </form>
</body>
</html>