<?php
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion =  new mysqli($db_host, $db_usuario, $db_clave, $db_nombre);
if(!$conexion->connect_errno){
    echo "conexión realizada <br>";
}else die("No se encontró la BD <br>");

$alumnosAprobados = "SELECT nombre from alumno where id_al = ANY(SELECT id_al from notas where id_mod = 'dwes' and cali >= 5)";
 $resultado = $conexion->query($alumnosAprobados); //$resultado es un objeto de la clase mysql_result

 while($fila=$resultado->fetch_array()){
    echo $fila['nombre']."<br>";
 }
 $conexion->close();
?>