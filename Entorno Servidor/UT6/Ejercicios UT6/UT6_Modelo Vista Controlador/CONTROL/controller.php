<?php
    require_once("../model/bd_class.php");

    $conec = new Conexion("cinema");
    $conexion=$conec->bd_connect;
    switch($_POST["consulta"]){
        case "1":
            require_once("../model/model_class_peliculas.php");
            $pelicula = new Pelicula();
            $result = $pelicula->queryPelisDrama($conexion);
            $datos = explode(";", $result);
            require_once("../views/peliculasdrama.php");
            break;
        case "2":
            require_once("../model/model_class_actores.php");
            $actor = new Actor();
            $result = $actor->queryNombreActrices($conexion);
            $datos = explode(";", $result);
            require_once("../views/nombreactrices.php");
            break;
        case "3":
            require_once("../model/model_class_actores.php");
            $actor = new Actor();
            $result = $actor->queryNacionalidades($conexion);
            $datos = explode(";", $result);
            require_once("../views/formulario_nacionalidades.php");
            break;
    }
?>