<?php
    if(isset($_COOKIE["usuario"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <form action="./login.php" method="post">
      <h1>ACCESO RESULTADOS PRUEBAS</h1>
      <label for="usuario">Usuario: </label>
      <input type="text" name="usuario" />
      <br /><br />
      <input type="submit" name="enviar" value="Seguir" />
    </form>
  </body>
</html>
