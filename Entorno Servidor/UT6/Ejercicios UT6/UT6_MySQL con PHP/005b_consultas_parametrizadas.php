<?php
//Cambiar las directivas mysqli_default_host y default_user en el archivo php.ini
    // $db_host="localhost";
    // $db_usuario = "root";
    // $db_clave = "";
    $db_nombre = "ciclos";
    // $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);
    $conexion = @mysqli_connect();
    if(mysqli_connect_errno()){
        echo "Fallo en la conexión <br>";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encontró la BD");

    //Caso 1 -> Primer formulario
    /* $id_al=$_POST["id_al"];
    $nom=$_POST["nombre"];
    $edad = $_POST["edad"];
    $id_curso = $_POST["id_curso"];
    $sql = "INSERT INTO alumno(id_al, nombre, edad, id_curso) VALUES(?,?,?,?)";
    $consulta = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($consulta, 'isii', $id_al, $nom, $edad, $id_curso); //i->Int; s->String
    $ok=mysqli_stmt_execute($consulta);

    if($ok){
        echo "Inserción correcta";
    }else{
        echo "Error.".mysqli_stmt_error($consulta);
    } */

    $sql = "UPDATE alumno SET nombre=? where nombre=?";
    $consulta = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($consulta, 'ss', $nombre_nuevo, $nombre_actual);
    $nombre_nuevo=$_POST["nombre_nuevo"];
    $nombre_actual=$_POST["nombre_actual"];
    $ok=mysqli_stmt_execute($consulta);
    if($ok){
        echo "Inserción correcta";
    }else{
        echo "Error.".mysqli_stmt_error($consulta);
    }
    mysqli_stmt_close($consulta);
?>