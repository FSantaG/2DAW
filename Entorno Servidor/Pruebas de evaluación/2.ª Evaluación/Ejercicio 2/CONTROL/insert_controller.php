<?php
    require_once("../MODEL/conexion.class.php");

    $connect = new Conexion("oposiciones");
    $conexion=$connect->bd_connect;
    require_once("../model/model_resultados.class.php");
    $insercion=new Resultados();
    $result = $insercion->consultaInsertValores($conexion);
    require_once("../views/comprobacion.php");
?>