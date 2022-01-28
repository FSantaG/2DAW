<?php
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion =  new mysqli($db_host, $db_usuario, $db_clave, $db_nombre);
if(!$conexion->connect_errno){
    echo "conexión realizada <br>";
}else die("No se encontró la BD <br>");

$edad_ac=18;
$edad_nu=19;

$alumnosAprobados = "UPDATE alumno SET edad=? WHERE edad=?";

 $stmt = $conexion->prepare($alumnosAprobados); //prepare devuelve un objeto de la clase stmt_result
 $stmt->bind_param('ii',$edad_nu,$edad_ac);
$ok=$stmt->execute();

if($ok)
    echo "Actualizacion realizada";
else
    echo "Imposible realizar la actualización";
 $conexion->close();
?>