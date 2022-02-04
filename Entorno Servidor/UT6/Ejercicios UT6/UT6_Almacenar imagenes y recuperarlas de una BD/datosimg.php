<?php
    /*
    $_FILES es una variable superglobal que almacenará datos de la imagen recibida:
        *name, almacena el nombre del fichero
        *type, el tipo o extensión (se podrá limitar el tipo de archivos a subir)
        *size, el tamaño (se podrá limitar el tamaño de los archivos a subir)
        *tmp_name, el nombre del directorio temporal utilizado de forma previa al alojamiento
        definitivo del fichero, que en este ejemplo está en $dir
        *error, si hay algún error
    */
    $nomf = $_FILES["imagen1"]["name"];
    $tipo = $_FILES["imagen1"]["type"];
    var_dump($tipo);
    echo "Archivo recibido: ".$nomf;
    echo"<br>";
    $dir=$_SERVER["DOCUMENT_ROOT"]."/"."uploads/";//Será necesario crear el directorio uploads en la raid del servidor
    var_dump($dir);
    if($tipo=="image/jpeg" || $tipo=="image/png" ||$tipo=="image/gip")
        move_uploaded_file($_FILES["imagen1"]["tmp_name"],$dir.$nomf);
    else
        echo"<br>No es una imagen";
    
    include("accesodb.php"); //acceder a la BD para insertar un registro
?>