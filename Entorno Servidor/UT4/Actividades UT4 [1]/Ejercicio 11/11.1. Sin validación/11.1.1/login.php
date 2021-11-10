<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
</head>
<body>
    <?php 
        const USUARIO = "admin";
        const CONTRASEÑA = "mjuan";
        $nombre=$_POST["nombre"];
        $pass = $_POST["pass"];

        if($nombre == USUARIO && $pass == CONTRASEÑA){
            echo "BIENVENIDO";
        }else{
            echo "Error: Login fallido";
        }
    ?>
</body>
</html>