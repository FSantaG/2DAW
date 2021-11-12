<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Función header </title>
</Head>
<body>
<h3> El servidor web redirige al usuario.  </h3>
<br>
<?php
/*
El servidor saca de la ejecución la página web cuando 
se encuentra el header, y ejecuta el código de la página 
a la que se vincula
*/
$nombre="Esther";
echo $nombre;
header("location: ./otraweb.php");

?>
</body>
</html>