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

    $consulta = "insert into alumno(id_al, nombre, edad, id_curso) values(10,'Manolo', 23, 1)";
    $resultados = mysqli_query($conexion, $consulta);
    if($resultados){
        echo "Inserción realizada";
    }else{
        echo mysqli_error($conexion);
    }
    echo "<br>";
    $consulta = "select * from alumno where id_al=10";
    $resultados = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_object($resultados)){
        echo $fila->nombre." ".$fila->edad;
    }
    mysqli_close($conexion);
?>