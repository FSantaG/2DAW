<?php
    require_once("../model/bd_class.php");

    $conec = new Conexion("cinema");
    $conexion=$conec->bd_connect;
    require_once("../model/model_class_actores.php");
    $actor=new Actor();
    $result = $actor->queryNacionalizados($conexion);
    $datos = explode(";", $result);
    require_once("../views/actoresdeunadeterminadanacionalidad.php");
?>