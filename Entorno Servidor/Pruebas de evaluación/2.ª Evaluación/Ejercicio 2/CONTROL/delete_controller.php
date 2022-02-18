<?php
    require_once("../MODEL/conexion.class.php");

    $connect = new Conexion("oposiciones");
    $conexion=$connect->bd_connect;
    require_once("../model/model_resultados.class.php");
    $borrado=new Resultados();
    $result = $borrado->consultaDeleteValores($conexion);
    require_once("../views/comprobacion.php");
?>