<?php
    require_once("lib/nusoap.php");
    function Suma($num1,$num2){
        $suma = $num1+$num2;
        $resultado = "El resultado de la suma $num1 + $num2 es igual a $suma";
        return $resultado;
    }
    $servicio = new nusoap_server();
    $namespace = "urn:miserviciowsdl";
    $servicio->configureWSDL("MiPrimerServicioWeb",$namespace);

    $servicio->register("Suma", array("num1"=>"xsd:integer","num2"=>"xsd:integer"),
                                array("return"=>"xsd:string"), $namespace);
    $servicio->service(file_get_contents("php://input"));
?>