<?php
    require_once("../model/conexion.class.php");

    $conec = new Conexion("oposiciones");
    $conexion=$conec->bd_connect;
    switch($_POST["enviar"]){
        case "Con plaza":
            require_once("../model/model_resultados.class.php");
            $consulta = new Resultados();
            $result = $consulta->consultaCheckConPlaza($conexion);
            $datos = explode(";", $result);
            require_once("../views/mostrar_resultados.php");
            break;
        case "Bolsa Trabajo":
            require_once("../model/model_resultados.class.php");
            $consulta = new Resultados();
            $result = $consulta->consultaCheckBolsaTrabajo($conexion);
            $datos = explode(";", $result);
            require_once("../views/mostrar_resultados.php");
            break;
        case "No Aptos":
            require_once("../model/model_resultados.class.php");
            $consulta = new Resultados();
            $result = $consulta->consultaCheckNoAptos($conexion);
            $datos = explode(";", $result);
            require_once("../views/mostrar_resultados.php");
            break;
    }
?>