<?php
    $db_host="localhost";
    $db_usuario = "root";
    $db_clave = "";
    $db_nombre = "ciclos";

    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);
    if(mysqli_connect_errno()){
        echo "Fallo en la conexión <br>";
        exit();
    }else{
        echo "Conexión establecida <br>";
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encontró la BD");

    $consulta = "select * from alumno";
    $resultados = mysqli_query($conexion, $consulta);
    while($fila=mysqli_fetch_row($resultados)){
        echo $fila[0]." ".$fila[1]." ".$fila[2]." ".$fila[3]."<br>";
    }
    mysqli_close($conexion);
?>