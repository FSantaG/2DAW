<?php
    /*Función para obtener la provincia que más ahorra, el valor del 
    ahorro que tiene, y el ahorro medio de la comunidad. */
    function obtenerProvinciaAhorradora($provincias){
        $ahorroMaximo = 0;
        $sumaAhorro = 0;
        foreach($provincias as $provincia => $datos){
            /*"0" son los ingresos, "1" son  los gastos*/
            $ahorro = (int)$datos[0] + (int)$datos[1];
            if($ahorroMaximo <= $ahorro){
                $ahorroMaximo = $ahorro;
                $provMasAhorradora = $provincia;
            }
            $sumaAhorro += $ahorro;
        }
        return $provMasAhorradora." (Ahorro: $ahorroMaximo; Ahorro total: $sumaAhorro)";
    }
    /*Función para obtener el porcentaje de ahorro de la comunidad que más
    ha ahorrado.*/
    function obtenerPorcentajeAhorro($provincias){
        $ahorroMax = 0;
        $totalAhorro = 0;
        foreach($provincias as $provincia => $datos){
            /*"0" son los ingresos, "1" son  los gastos*/
            $ahorro = (int)$datos[0] + (int)$datos[1];
            if($ahorroMax <= $ahorro){
                $ahorroMax = $ahorro;
                
            }
            $totalAhorro += $ahorro;
            $porcentaje = ($ahorroMax * 100) / $totalAhorro;
        }
        /*Se usa la función round para que no quede un número decimal mixto. */
        return round($porcentaje, 2)."%";
    }

?>