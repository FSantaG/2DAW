<?php
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion =  new mysqli($db_host, $db_usuario, $db_clave, $db_nombre);
if(!$conexion->connect_errno){
    echo "conexión realizada <br>";
}else die("No se encontró la BD <br>");

$conexion->autocommit(false);
$consulta = "INSERT into modulo(id_mod, horas) values ('aw', 4),('di',6),('ei',3)";
$resultado=$conexion->query($consulta);
if($conexion->affected_rows>2)
$conexion->commit();
else
$conexion->rollback();

$conexion->close();
?>