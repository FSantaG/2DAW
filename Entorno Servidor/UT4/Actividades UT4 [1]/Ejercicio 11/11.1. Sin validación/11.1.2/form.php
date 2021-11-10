<?php
    if(isset($_POST["enviar"])){
        $USUARIO = "admin";
        $CONTRASEÑA = "mjuan";
        $nombre=$_POST["nombre"];
        $pass = $_POST["pass"];

        if($nombre == $USUARIO && $pass == $CONTRASEÑA){
            echo "BIENVENIDO";
        }else{
            echo "Error: Login fallido";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" target="_blank" method="post">
        <label>
            Username <input type="text" name="nombre" required/>
        </label>
        <label>
            Password <input type="password" name="pass" required/>
        </label>
        <input type="submit" name="enviar" value="Login"/>
    </form>
</body>
</html>