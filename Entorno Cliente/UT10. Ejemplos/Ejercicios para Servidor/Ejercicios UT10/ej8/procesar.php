<?php
// Cabecera para indicar que vamos a enviar datos JSON y que no haga caché de los datos.
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
// Configuración BASE DE DATOS
$host = "localhost";
$user = "ajaxFF";
$dbname = "ajax";
$pass = "dwec1718";
// Creamos la conexión al servidor.
$conexion=mysqli_connect($host,$user,$pass,$dbname);
mysqli_query($conexion,"SET NAMES 'utf8'");

?>