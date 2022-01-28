<?php
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion =  new mysqli($db_host, $db_usuario, $db_clave, $db_nombre);
if(!$conexion->connect_errno){
    echo "conexión realizada <br>";
}else die("No se encontró la BD <br>");

    $insertar1 = "INSERT into modulo(id_mod, horas) values('dwes', 9), ('dwec', 8)";
    if($conexion->query($insertar1)==TRUE){
        echo "Inserción realizada en la tabla módulo";
    }else{
        echo "Inserción no posible en la tabla módulo";
    }
    $insertar2 = "INSERT into notas(id_al,id_mod,cali) values (1, 'dwes', 7), (1, 'dwec',6),
    (2, 'dwes',4),(3,'dwes',4), (6,'dwes',5), (4,'dwec',3)";
    if($conexion->query($insertar2)==TRUE){
        echo "Inserción realizada en la tabla notas";
    }else{
        echo "Inserción no posible en la tabla notas";
    }
?>