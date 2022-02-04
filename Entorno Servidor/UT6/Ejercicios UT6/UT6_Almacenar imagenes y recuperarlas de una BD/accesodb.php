<!--Debería funcionar, pero no lo hace sksksksk-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso DB</title>
</head>
<body>
    <?php
        $db_host = "localhost";
        $db_usuario = "root";
        $db_clave = "";
        $db_nombre = "obras_arte";

        $conexion = mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_connect_errno()){
            echo "Fallo en la conexión <br>";
            exit();
        }else{
            echo "Conexión establecida";
        }

        mysqli_select_db($conexion,$db_nombre) or die("No se encontró la BD");
        $deno=$_POST["texto_id"];
        $insertar="INSERT into obras (deno,foto) values (?,?)";
        $stmt = mysqli_prepare($conexion, $insertar);
        mysqli_stmt_bind_param($stmt,"ss",$deno,$nomf);
        if(mysqli_stmt_execute($stmt))
            echo "<br>Cambio realizado con éxito<br>";
        else echo "<br>No se ha realizado ningún cambio<br>";
        mysqli_close($conexion);

        /* 
        $consulta="SELECT foto from obras";
        $resultados = mysqli_query($conexion, $consulta);
        $fila = mysqli_fetch_array($resultados);
        $ruta_foto=$fila[0];
        echo $ruta_foto;
        mysqli_close($conexion);
        */
    ?>
    <!--
        <div>
            <img src="/uploads/<?php //echo $ruta_foto;?>" alt="Imagen obra de arte" width="25%"/> 
        </div
    -->
</body>
</html>