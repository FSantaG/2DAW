<?php
include_once('commun.inc.php');
$numero = $_GET['numero'];
$autor = $autores[$numero];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Autor</title>
</head>

<body>
  <h1><?= $autor ?></h1>
  <p><a href="inicio.php">Volver a la lista</a></p>
</body>

</html>