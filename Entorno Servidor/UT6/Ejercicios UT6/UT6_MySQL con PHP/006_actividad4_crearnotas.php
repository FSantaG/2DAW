<?php
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion =  new mysqli($db_host, $db_usuario, $db_clave, $db_nombre);
if(!$conexion->connect_errno){
    echo "conexión realizada <br>";
}else die("No se encontró la BD <br>");

$sql = "CREATE TABLE notas(id_al int,
id_mod varchar(5), cali decimal(4,2), 
CONSTRAINT  pk_notas PRIMARY KEY (id_al, id_mod), 
CONSTRAINT fk_notas_alumno FOREIGN KEY(id_al) REFERENCES alumno(id_al) ON DELETE CASCADE ON UPDATE CASCADE, 
CONSTRAINT fk_notas_modulo FOREIGN KEY(id_mod) REFERENCES modulo(id_mod) ON DELETE CASCADE ON UPDATE CASCADE ) 
Engine='innoDB'";
$resultado=$conexion->query($sql);
if(!$resultado==true){
    echo "Creación correcta <br>";
}else{
    echo "<br>La creacion no es posible <br>";
}

$sql="SHOW TABLES FROM $db_nombre";
$resultado=$conexion->query($sql);
//var_dump($resultado);

while($fila=$resultado->fetch_row()){
    echo $fila[0]."<br>";
}

$conexion->close();
?>